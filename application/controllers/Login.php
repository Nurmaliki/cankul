<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
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
        $this->load->view('login');
        $this->load->view('layout/footer');
    }

    function beneficiary()
    {
        $p = (object)$_POST;
        $username = $p->username;
        $password = $p->password;
        $data = [
            'username' => $username,
            'password' => $password
        ];
        $res = api_sync_post('beneficiary/login', $data);

        if ($res->status) {
            $data_user = $res->data;
            $this->session->set_userdata('data',    $data_user);
            $this->session->set_userdata('type',    'beneficiary');
            $res_auth = [
                'status'    =>  true,
                'message'   =>  'Login Berhasil'
            ];
            echo json_encode($res_auth);
            return;
        } else {
            echo json_encode($res);
            return;
        }
    }

    function funder()
    {
        $p = (object)$_POST;
        $username = $p->username;
        $password = $p->password;
        $data = [
            'username' => $username,
            'password' => $password
        ];
        $res = api_sync_post('funder/login', $data);

        if ($res->status) {
            $data_user = $res->data;
            $this->session->set_userdata('data',    $data_user);
            $this->session->set_userdata('type',    'funder');

            $res_auth = [
                'status'    =>  true,
                'message'   =>  'Login Berhasil'
            ];
            echo json_encode($res_auth);
            return;
        } else {
            echo json_encode($res);
            return;
        }
    }
}
