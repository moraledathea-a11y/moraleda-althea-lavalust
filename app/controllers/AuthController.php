<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ApiAuthController extends Controller
{
    private $api;

    public function __construct()
    {
        parent::__construct();

        $this->call->library('Api');
        $this->api = $this->Api;
    }

    public function login()
    {
        $this->api->require_method('POST');

        $data = $this->api->body();

        $username = $data['username'] ?? '';
        $password = $data['password'] ?? '';

        if ($username === 'admin' && $password === 'admin123') {

            $tokens = $this->api->issue_tokens([
                'id' => 1,
                'role' => 'admin'
            ]);

            $this->api->respond([
                'message' => 'Login successful.',
                'token' => $tokens['access_token'],
                'access_token' => $tokens['access_token'],
                'refresh_token' => $tokens['refresh_token']
            ]);
        }

        $this->api->respond_error(
            'Invalid username or password.',
            401
        );
    }

    public function logout()
    {
        $this->api->require_method('POST');

        $data = $this->api->body();

        $this->api->revoke_refresh_token(
            $data['refresh_token'] ?? ''
        );

        $this->api->respond([
            'message' => 'Logged out successfully.'
        ]);
    }
}