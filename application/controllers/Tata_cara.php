<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tata_cara extends CI_Controller
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


    public function pendana()
    {
        $this->load->view('layout/header');
        $this->load->view('tata_cara/pendana');
        $this->load->view('layout/footer');
    }

    public function penerima()
    {
        $this->load->view('layout/header');
        $this->load->view('tata_cara/penerima');
        $this->load->view('layout/footer');
    }

    public function pengaduan()
    {
        $this->load->view('layout/header');
        $this->load->view('tata_cara/pengaduan');
        $this->load->view('layout/footer');
    }
}
