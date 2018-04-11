<?php

class Biodata extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function getBiodataObject() {
        $query = $this->db->query("Select nama,nim,alamat from biodata");
        foreach($query->result() as $row){
            echo $row->nama;
            echo $row->nim;
            echo $row->alamat;
        }

        return $query->result();
    }

    public function getBiodataArray(){
        $query = $this->db->query("Select nama,nim,alamat from biodata");
        foreach($query->result_array() as $row){
            echo $row['nama'];
            echo $row['nim'];
            echo $row['alamat'];
        }

        echo $query->num_rows();
        return $query->result();
    }
}
