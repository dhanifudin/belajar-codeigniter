<?php

class Pegawai_model extends CI_Model {

    public function list()
    {
        $query = $this->db->get('pegawai');
        return $query->result();
    }

    public function insert($data = array())
    {
        $result = $this->db->insert('pegawai', $data);
        return $result;
    }

    public function update($id)
    {
        $data = array('nama' => $this->input->post('nama'));
        $this->db->update('pegawai', $data)
            ->where('id', $id);
    }

    public function show($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('pegawai');
        return $query->row();
    }

    public function deletePegawaiById($id)
    {
        $this->db->delete('pegawai')
            ->where('id', $id);
    }

}
