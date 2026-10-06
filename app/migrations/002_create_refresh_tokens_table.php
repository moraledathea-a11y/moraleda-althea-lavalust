<?php

class Create_refresh_tokens_table {

    private $_lava;
    protected $dbforge;

    public function __construct()
    {
        $this->_lava = lava_instance();
        $this->_lava->call->dbforge();
    }

    public function up()
    {
        $this->_lava->dbforge->add_field([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'token' => [
                'type' => 'TEXT'
            ],
            'expires_at' => [
                'type' => 'DATETIME'
            ],
            'jti' => [
                'type' => 'VARCHAR',
                'constraint' => 64
            ]
        ]);

        $this->_lava->dbforge->add_key('id', TRUE);
        $this->_lava->dbforge->create_table('refresh_tokens');
    }

    public function down()
    {
        $this->_lava->dbforge->drop_table('refresh_tokens');
    }
}