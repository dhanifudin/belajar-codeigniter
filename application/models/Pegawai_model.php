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

    public function show($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('pegawai');
        return $query->row();
    }

    public function update($id, $data)
    {
        $this->db->set($data);
        $this->db->where('id', $id);
        $result = $this->db->update('pegawai');
        return $result;
    }


    public function delete($id)
    {
        $this->db->where('id', $id);
        $result = $this->db->delete('pegawai');
        return $result;
    }

}
