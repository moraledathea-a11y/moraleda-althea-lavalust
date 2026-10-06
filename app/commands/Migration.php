<?php

class Migration
{
    public static $command = 'migration';

    public static $description = 'Run migration commands';

    public function handle($action = null, array $flags = [])
    {
        $index = dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'index.php';

        if (!file_exists($index)) {
            exit("Public index.php not found.\n");
        }

        if (!$action) {
            exit("Migration action is required.\n");
        }

        $routes = [
            'run' => 'migrate',
            'rollback' => 'rollback',
            'rollback-all' => 'rollback-all',
            'refresh' => 'refresh',
            'status' => 'status'
        ];

        if ($action === 'create-migration') {
            $name = $flags['name'] ?? null;

            if (!$name) {
                exit("Migration name is required.\n");
            }

            $route = 'create-migration/' . $name;
        } elseif (isset($routes[$action])) {
            $route = $routes[$action];
        } else {
            exit("Unknown migration action: " . $action . "\n");
        }

        $command = sprintf(
            'php %s %s',
            escapeshellarg($index),
            escapeshellarg($route)
        );

        passthru($command);
    }
}