<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_beneficiary extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('beneficiary/login');
        $this->load->view('layout/footer');
    }

    function action()
    {
        $p = (object)$_POST;
        $username   = $p->username;
        $email      = $p->email;
        $password   = $p->password;
        $data = [
            'username'  => $username,
            'email'     => $email,
            'password'  => $password
        ];
        $res = api_sync_post('beneficiary/register', $data);


        echo json_encode($res);
        return;
    }
}
