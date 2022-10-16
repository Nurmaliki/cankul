<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Campaign extends CI_Controller
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
        if ($this->session->userdata('data') == NULL) {
            redirect(base_url('login/logout'));
        }

        $res = api_sync_get('campaign/list');
        // print_r($res);
        $data = [
            'data' => $res->status ? $res->data : []
        ];
        // die();
        $this->load->view('dashboard/layout/header');
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/campaign', $data);
        $this->load->view('dashboard/layout/footer');
    }

    function add()
    {
        $user = $this->session->userdata('data');
        $id = $user->id;
        $res = api_sync_get('beneficiary/company_by_id/' . $id);
        print_r($res);
        die();
        // $company = 
        $data = [];
        $this->load->view('dashboard/layout/header');
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/campaign_add', $data);
        $this->load->view('dashboard/layout/footer');
    }

    function add_action()
    {
        $user = $this->session->userdata('data');
        $beneficiary_id = $user->id;
        $p = (object) $_POST;
        // print_r($p);
        // die();

        # jika update = 0  maka itu add 
        # jika update =1 maka itu update
        $data = [
            'update' => $p->update,
            'name' => $p->name,
            'description' => $p->description,
            'return_percentage' => $p->return_percentage,
            'date_start' => $p->date_start,
            'date_end' => $p->date_end,
            'beneficiary_id' => $beneficiary_id,
            'company_id' => $p->company_id,
            'target' => $p->target,
            'status' => 0,
        ];

        $res = api_sync_post('campaign', $data);

        echo json_encode($res);
        return;
    }
}
