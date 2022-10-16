<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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

        $this->load->view('dashboard/layout/header');
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/index');
        $this->load->view('dashboard/layout/footer');
    }
}
