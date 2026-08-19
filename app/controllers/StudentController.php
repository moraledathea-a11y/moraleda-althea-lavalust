<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        $_SESSION['student_access'] = true;

        $data['title'] = "Althea's Student Hub";

        $this->call->view('student_home', $data);
    }

    public function profile()
    {
        $student = [
            'student_id' => '00305',
            'name' => 'Althea Lou N. Moraleda',
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => 'III-F6',
            'email' => 'moraledathhea@gmail.com',
            'hobby' => 'Web Design and Technology',
            'description' => 'A BSIT student interested in creating useful and creative web applications.'
        ];

        $this->call->view('student_profile', $student);
    }
}