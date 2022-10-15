<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Company extends CI_Controller
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
        if ($this->session->userdata('data') != NULL) {
            redirect(base_url('dashboard'));
        }

        $this->load->view('dashboard/layout/header');
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/company');
        $this->load->view('dashboard/layout/footer');
    }

    function add()
    {
        $this->load->view('dashboard/layout/header');
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/company');
        $this->load->view('dashboard/layout/footer');
    }

    function add_action()
    {
        if ($this->session->userdata('type') == 'beneficiary') {
            # code...
            $user           = $this->session->userdata('data');
            $beneficiary_id = $user->id;
            $p              = (object) $_POST;

            # jika update = 0  maka itu add 
            # jika update =1 maka itu update
            $data = [
                'update' => $p->update,
                'beneficiary_id' => $beneficiary_id,
                'name' => $p->name,
                'region' => $p->region,
                'youtube' => $p->youtube,
                'overview' => $p->overview
            ];

            $res = api_sync_post('beneficiary/company', $data);

            echo json_encode($res);
            return;
        } else {
            $res = [
                'status' => false,
                'message' => 'Anda bukan beneficiary'
            ];
            echo json_encode($res);
            return;
        }
    }
}
