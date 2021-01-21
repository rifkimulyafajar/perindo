<?php

defined('BASEPATH') or exit('No direct script access allowed');

class admin_model extends CI_Model
{

    // BERITA
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

    public function tambah_berita()
    {
        $this->id_berita = uniqid();
        $data = [
            "judul" => $this->input->post('judul', true),
            "Tanggal" => $this->input->post('Tanggal', true),
            // "kategori" => $this->input->post('id_kategori', true),
            "foto" => $this->uploadImage1(),
            "sumber" => $this->input->post('sumber', true),
            "konten" => $this->input->post('konten', true),
        ];
        $this->db->insert('berita', $data);
    }

    public function uploadImage1()
    {
        $config['upload_path'] = './upload/berita/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->id_berita;
        $config['overwrite'] = true;
        // $config['max_size'] = 1024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }
    }

    public function edit_berita()
    {
        $post = $this->input->post();
        $this->id_berita = $post["id_berita"];
        $this->judul = $post["judul"];
        $this->foto = $this->uploadimage1();
        $this->sumber = $post["sumber"];
        $this->konten = $post["konten"];

        $this->db->update('berita', $this, array('id_berita' => $post['id_berita']));
    }

    public function hapus_berita($id)
    {
        return $this->db->delete('berita', array("id_berita" => $id));
    }



    // GALLERY
    public function getAllGallery()
    {
        $query = $this->db->get('gallery');
        return $query->result_array();
    }

    public function getGalleryById($id)
    {
        $query = $this->db->get_where('gallery', array('id_gambar' => $id));
        return $query->row_array();
    }


    public function tambah_gallery()
    {
        $this->id_gambar = uniqid();
        $data = [
            "ket" => $this->input->post('ket', true),
            "gambar" => $this->uploadImage3(),
        ];
        $this->db->insert('gallery', $data);
    }

    public function uploadImage3()
    {
        $config['upload_path'] = './upload/galeri/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->id_gambar;
        $config['overwrite'] = true;
        // $config['max_size'] = 1024;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
       
        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
    }

    public function edit_gallery()
    {
        $post = $this->input->post();
        $this->id_gambar = $post["id_gambar"];
        $this->ket = $post["ket"];
        $this->gambar = $this->uploadimage3();


        $this->db->update('gallery', $this, array('id_gambar' => $post['id_gambar']));
    }

    public function hapus_gallery($id)
    {
        return $this->db->delete('gallery', array("id_gambar" => $id));
    }



    // PRODUK DAN JASA
    public function getAllProduk()
    {
        $query = $this->db->get('produk');
        return $query->result_array();
    }

    public function getProdukById($id)
    {
        $query = $this->db->get_where('produk', array('id_produk' => $id));
        return $query->row_array();
    }


    public function tambah_produk()
    {
        $this->id_produk = uniqid();
        $data = [
            "nama" => $this->input->post('nama', true),
            "istilah" => $this->input->post('istilah', true),
            "gambar" => $this->uploadImage4(),
        ];
        $this->db->insert('produk', $data);
    }


    public function uploadImage4()
    {
        $config['upload_path'] = './upload/produk/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->id_produk;
        $config['overwrite'] = true;
        // $config['max_size'] = 1024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
    }

    public function edit_produk()
    {
        $post = $this->input->post();
        $this->id_produk = $post["id_produk"];
        $this->nama = $post["nama"];
        $this->istilah = $post["istilah"];
        $this->gambar = $this->uploadimage4();

        $this->db->update('produk', $this, array('id_produk' => $post['id_produk']));
    }

    public function hapus_produk($id)
    {
        return $this->db->delete('produk', array("id_produk" => $id));
    }

}
