<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        $this->load->model('pegawai_model');
    }


    public function index()
    {
        $pegawai = $this->pegawai_model
            ->list();
        $data = [
            'title' => 'Pemrograman Web Framework :: Data Pegawai',
            'pegawai' => $pegawai
        ];
        $this->load->view('pegawai/index', $data);
    }

    public function create()
    {
        $this->load->view('pegawai/create');
    }

    public function store()
    {
        $data = ['nama' => $this->input->post('nama')];
        $rules = ['nama', 'Nama', 'trim|required'];
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run()) {
            $result = $this->pegawai_model->insert($data);
            if ($result) {
                redirect('pegawai/index');
            }
        } else {
            redirect('pegawai/create');
        }
    }

    public function show($id)
    {
        $pegawai = $this->pegawai_model->show($id);
        $data = [
            'data' => $pegawai
        ];
        $this->load->view('pegawai/show', $data);
    }

    public function edit($id)
    {
        $pegawai = $this->pegawai_model->show($id);
        $data = [
            'data' => $pegawai
        ];
        $this->load->view('pegawai/edit', $data);
    }

    public function update($id)
    {
    }

    public function destroy()
    {
    }

}

/* End of file Pegawai.php */
