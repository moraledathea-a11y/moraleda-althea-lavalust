<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UsersController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->model('UsersModel');
    }

    public function index()
    {
        $users = $this->UsersModel->get_users();

        $this->call->view('users', [
            'users' => $users
        ]);
    }

    public function create()
    {
        if ($this->io->method() == 'post') {

            $data = [
                'firstname' => $this->io->post('firstname'),
                'lastname' => $this->io->post('lastname'),
                'email' => $this->io->post('email'),
                'username' => $this->io->post('username')
            ];

            $this->UsersModel->create_user($data);

            redirect('users');
            exit;
        }

        $this->call->view('user_create');
    }

    public function edit($id)
    {
        $user = $this->UsersModel->get_user($id);

        if (!$user) {
            echo "User not found.";
            return;
        }

        if ($this->io->method() == 'post') {

            $data = [
                'firstname' => $this->io->post('firstname'),
                'lastname' => $this->io->post('lastname'),
                'email' => $this->io->post('email'),
                'username' => $this->io->post('username')
            ];

            $updated = $this->UsersModel->update_user($id, $data);

            if ($updated) {
                redirect('users');
                exit;
            } else {
                echo "Update failed.";
                return;
            }
        }

        $this->call->view('user_edit', [
            'user' => $user
        ]);
    }

    public function delete($id)
    {
        $this->UsersModel->delete_user($id);

        redirect('users');
        exit;
    }
}