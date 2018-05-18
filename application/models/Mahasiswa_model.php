<?php

class Mahasiswa_model extends CI_Model {

    public function list($limit, $start)
    {
        // $this->db->limit($limit, $start);
        $query = $this->db->get('mahasiswa', $limit, $start);
        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    public function getTotal()
    {
        return $this->db->count_all('mahasiswa');
    }

}
