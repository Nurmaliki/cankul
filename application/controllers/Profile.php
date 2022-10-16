<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
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

        $user = $this->session->userdata('data');
        if ($this->session->userdata('data') == NULL) {
            redirect(base_url());
        }
        $tipe_user = $this->session->userdata('type');

        if ($tipe_user == 'funder') {
            $user_id = empty($user->funder_id) ? $user->id : $user->funder_id;
        } else {
            $user_id = empty($user->beneficiary_id) ? $user->id : $user->beneficiary_id;
        }
        $param = [];

        if ($tipe_user == 'beneficiary') {

            $res = api_sync_get('beneficiary/profile/' . $user_id);
            $res_company = api_sync_get('beneficiary/company_by_id/' . $user_id);
        } else {
            $res = api_sync_get('funder/profile/' . $user_id);
            $res_company = [
                'status' => false,
                'data'  => NULL
            ];
        }


        $data = [
            'profile' => $res->data,
            'detail' => empty($res->data) ?  FALSE : TRUE,
            'company' => empty($res_company->data) ?  FALSE : TRUE,
            'company_data' => empty($res_company->data) ? []  : $res_company->data,
        ];
        $this->load->view('dashboard/layout/header');
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/profile', $data);
        $this->load->view('dashboard/layout/footer');
    }


    function upload_file($namaFile, $namaSementara, $dirUpload)
    {

        $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);

        return $terupload;
    }

    function update()
    {

        $tipe_user = $this->session->userdata('type');
        $p = (object)$_POST;

        $user = $this->session->userdata('data');

        if ($tipe_user == 'beneficiary') {
            # code...
            $user_id = empty($user->beneficiary_id) ? $user->id : $user->beneficiary_id;
        } else {
            $user_id = empty($user->funder_id) ? $user->id : $user->funder_id;
        }

        if ($tipe_user == 'beneficiary') {
            # code...
            $data['beneficiary_id']    = $user_id;
        } else {

            $data['funder_id']         = $user_id;
        }
        $data['update']            = (int)$p->update;
        $data['first_name']        = $p->first_name;
        $data['last_name']         = $p->last_name;
        $data['gender']            = $p->gender;
        $data['address']           = $p->address;
        $data['kecamatan']         = $p->kecamatan;
        $data['kelurahan']         = $p->kelurahan;
        $data['phone']             = $p->phone;
        $data['title']             = $p->title;
        $data['nationality']       = $p->nationality;
        $data['province']          = $p->province;
        $data['city']              = $p->city;
        $data['rt']                = $p->rt;
        $data['rw']                = $p->rw;
        $data['mother_name']       = $p->mother_name;
        $data['marital_status']    = !isset($p->marital_status) ? null : $p->marital_status;
        $data['last_education']    = $p->last_education;
        $data['job_field']         = $p->job_field;
        $data['job_title']         = $p->job_title;
        $data['funds_source']      = $p->funds_source;
        $data['monthly_income']    = empty($p->monthly_income) ? 0 : $p->monthly_income;


        if ($tipe_user == 'beneficiary') {
            $res = api_sync_post('beneficiary/updateprofile', $data);
        } else {
            $res = api_sync_post('funder/updateprofile', $data);
        }


        if ($res->status) {
            // upload KTP
            $namaFile = time() . "" . $_FILES['ktp']['name'];
            $namaSementara = $_FILES['ktp']['tmp_name'];
            $dirUpload = "./uploads/ktp/";
            $upload_ktp = $this->upload_file($namaFile, $namaSementara, $dirUpload);
            $upload_ktp_api = FCPATH . "" . str_replace("./", "", $dirUpload) . "" . $namaFile;

            // Upload foto diri 

            $namaFile = time() . "" . $_FILES['foto_diri']['name'];
            $namaSementara = $_FILES['foto_diri']['tmp_name'];
            $dirUpload = "./uploads/foto_diri/";
            $upload_foto_diri = $this->upload_file($namaFile, $namaSementara, $dirUpload);
            $upload_foto_diri_api = FCPATH . "" . str_replace("./", "", $dirUpload) . "" . $namaFile;


            if ($upload_ktp) {
                if ($tipe_user == 'beneficiary') {
                    $data_param['beneficiary_id'] = $user_id;
                } else {
                    $data_param['funder_id'] = $user_id;
                }
                $data_param['update']           = (int)$p->update;
                $data_param['document_name']    = 'KTP';
                $data_param['document_no']      = time();
                $data_param['document_photo']   = new CURLFILE("" . $upload_ktp_api . "");

                $res_documents = api_sync_post($tipe_user . '/documents', $data_param);

                if ($res_documents->status) {
                    unlink($upload_ktp_api);
                }
            }


            if ($upload_foto_diri) {
                # code...
                if ($tipe_user == 'beneficiary') {
                    $data_param['beneficiary_id'] = $user_id;
                } else {
                    $data_param['funder_id'] = $user_id;
                }

                $data_param['update']           = (int)$p->update;
                $data_param['document_name']    = 'FOTO_DIRI';
                $data_param['document_no']      = time();
                $data_param['document_photo']   = new CURLFILE("" . $upload_foto_diri_api . "");

                $res_documents = api_sync_post($tipe_user . '/documents', $data_param);
                if ($res_documents->status) {
                    unlink($upload_foto_diri_api);
                }
            }
        }

        if ($res->status) {
            $res_auth = [
                'status'    =>  true,
                'message'   =>  $res->messages
            ];
            echo json_encode($res_auth);
            return;
        } else {
            echo json_encode($res);
            return;
        }
    }

    function document()
    {
        // untuk upload foto
        $tipe_user = $this->session->userdata('type');
        $p = (object)$_POST;
        $user = $this->session->userdata('data');


        if ($tipe_user == 'beneficiary') {
            $data_param['beneficiary_id'] = $user->id;
        } else {
            $data_param['funder_id'] = $user->id;
        }

        $data_param = [
            'update'            => '0',
            'document_name'     => $p->first_name,
            'document_no'       => time(),
            'document_photo'    => new CURLFILE(''),
        ];
        $res_documents = api_sync_post($tipe_user . '/documents', $data_param);

        echo json_encode($res_documents);
        return;
    }
}
