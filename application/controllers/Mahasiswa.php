<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->model('mahasiswa_model');
    }

    public function index()
    {
        $data = [];
        $total = $this->mahasiswa_model->getTotal();

        if ($total > 0) {
            $limit = 2;
            $start = $this->uri->segment(3, 0);

            $config = [
                'base_url' => base_url() . 'mahasiswa/index',
                'total_rows' => $total,
                'per_page' => $limit,
                'uri_segment' => 3,
            ];
            $this->pagination->initialize($config);

            $data = [
                'results' => $this->mahasiswa_model->list($limit, $start),
                'links' => $this->pagination->create_links(),
            ];
        }

        $this->load->view('mahasiswa/index', $data);
    }

    public function bootstrap()
    {
        $data = [];
        $total = $this->mahasiswa_model->getTotal();

        if ($total > 0) {
            $limit = 2;
            $start = $this->uri->segment(3, 0);

            $config = [
                'base_url' => base_url() . 'mahasiswa/bootstrap',
                'total_rows' => $total,
                'per_page' => $limit,
                'uri_segment' => 3,

                // Bootstrap 3 Pagination
                'first_link' => '&laquo;',
                'last_link' => '&raquo;',
                'next_link' => 'Next',
                'prev_link' => 'Prev',
                'full_tag_open' => '<ul class="pagination">',
                'full_tag_close' => '</ul>',
                'num_tag_open' => '<li>',
                'num_tag_close' => '</li>',
                'cur_tag_open' => '<li class="active"><span>',
                'cur_tag_close' => '<span class="sr-only">(current)</span></span></li>',
                'next_tag_open' => '<li>',
                'next_tag_close' => '</li>',
                'prev_tag_open' => '<li>',
                'prev_tag_close' => '</li>',
                'first_tag_open' => '<li>',
                'first_tag_close' => '</li>',
                'last_tag_open' => '<li>',
                'last_tag_close' => '</li>',
            ];
            $this->pagination->initialize($config);

            $data = [
                'results' => $this->mahasiswa_model->list($limit, $start),
                'links' => $this->pagination->create_links(),
            ];
        }

        $this->load->view('mahasiswa/bootstrap', $data);
    }

}
