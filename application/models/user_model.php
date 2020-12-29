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

    public function getAllartikel()
    {
        $query = $this->db->get('artikel');
        return $query->result_array();
    }

    public function getArtikelById($id)
    {
        $query = $this->db->get_where('artikel', array('id_artikel' => $id));
        return $query->row_array();
    }

    public function getKategori($kategori)
    {
        # code...
        $query = $this->db->get_where('artikel', array('id_kategori' => $kategori));
        return $query->result_array();
    }

    // ====================== ARTIKEL ==================================================

    public function getAllTanggapan($id)
    {
        # code...
        $query = $this->db->get_where('diskusi', array('id_topik' => $id));
        return $query->result_array();
    }

    public function tambah_tanggapan($id)
    {
        # code...
        $this->id_diskusi = uniqid();

        $data = [
            "id_topik" => $this->input->post('id_topik', true),
            "nama" => $this->input->post('nama', true),
            "pembahasan" => $this->input->post('pembahasan', true),
            "tanggal" => $this->input->post('tanggal', true)
        ];

        $this->db->insert('diskusi', $data);
    }
}
