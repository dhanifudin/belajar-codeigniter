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
        $rules = [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'trim|required'
            ]
        ];
        // Untuk rule sederhana bisa dengan menggunakan
        // $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run()) {
            $result = $this->pegawai_model->insert($data);
            if ($result) {
                redirect('pegawai');
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
        $data = [ 'nama' => $this->input->post('nama') ];
        $rules = [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'trim|required'
            ]
        ];
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run()) {
            $result = $this->pegawai_model->update($id, $data);
            if ($result) {
                redirect('pegawai');
            }
        } else {
            redirect('pegawai/edit/'.$id);
        }
    }

    public function destroy($id)
    {
        $result = $this->pegawai_model->delete($id);
        if ($result) {
            redirect('pegawai');
        } else {
            redirect('pegawai');
        }
    }

}

/* End of file Pegawai.php */
