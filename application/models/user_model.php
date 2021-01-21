<?php

defined('BASEPATH') or exit('No direct script access allowed');

class user_model extends CI_Model
{
    public function getAllBerita()
    {
        $query = $this->db->get('berita');
        return $query->result_array();
    }

    public function getBeritaById($id)
    {
        $query = $this->db->get_where('berita', array('id_berita' => $id));
        return $query->row_array();
    }

    // ====================== BERITA ===================================================
    

    // public function getAllTanggapan($id)
    // {
    //     # code...
    //     $query = $this->db->get_where('diskusi', array('id_topik' => $id));
    //     return $query->result_array();
    // }

    // public function tambah_tanggapan($id)
    // {
    //     # code...
    //     $this->id_diskusi = uniqid();

    //     $data = [
    //         "id_topik" => $this->input->post('id_topik', true),
    //         "nama" => $this->input->post('nama', true),
    //         "pembahasan" => $this->input->post('pembahasan', true),
    //         "tanggal" => $this->input->post('tanggal', true)
    //     ];

    //     $this->db->insert('diskusi', $data);
    // }

    // ====================== GALLERY ==================================================
    public function getAllGallery()
    {
        $query = $this->db->get('gallery');
        return $query->result_array(); 
    }

    // ====================== PRODUK ==================================================
    public function getAllProduk()
    {
        $query = $this->db->get('produk');
        return $query->result_array(); 
    }

}
