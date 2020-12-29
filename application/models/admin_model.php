<?php

defined('BASEPATH') or exit('No direct script access allowed');

class admin_model extends CI_Model
{

    // DASBOARD
    public function hitung_artikel()
    {
        return $this->db->count_all('artikel');
    }

    public function hitung_berita()
    {
        return $this->db->count_all('berita');
    }

    public function hitung_kalender()
    {
        return $this->db->count_all('kalender');
    }

    public function hitung_diskusi()
    {
        return $this->db->count_all('diskusi');
    }

    public function hitung_donasi()
    {
        return $this->db->count_all('donasi');
    }

    public function hitung_alluser()
    {
        return $this->db->count_all('user');
    }

    public function hitung_topik()
    {
        return $this->db->count_all('topik');
    }

    public function hitung_admin()
    {
        return $this->db->get_where('user', array('level' => '1'))->num_rows();
    }

    public function hitung_user()
    {
        return $this->db->get_where('user', array('level' => '2'))->num_rows();
    }

    // ARTIKEL
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

    public function getKategori()
    {
        $query = $this->db->get('kategori_artikel');
        return $query->result_array();
    }

    public function tambah_artikel()
    {
        $this->id_artikel = uniqid();
        $data = [
            "judul" => $this->input->post('judul', true),
            "id_kategori" => $this->input->post('id_kategori', true),
            "Tanggal" => $this->input->post('Tanggal', true),
            "gambar" => $this->uploadImage(),
            "sumber" => $this->input->post('sumber', true),
            "konten" => $this->input->post('konten', true),
        ];
        $this->db->insert('artikel', $data);
    }

    public function uploadImage()
    {
        $config['upload_path'] = './upload/artikel/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->id_artikel;
        $config['overwrite'] = true;
        // $config['max_size'] = 1024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
    }

    public function edit_artikel()
    {
        $post = $this->input->post();
        $this->id_artikel = $post["id_artikel"];
        $this->judul = $post["judul"];
        $this->id_kategori = $post["id_kategori"];
        $this->tanggal = $post["tanggal"];
        $this->gambar = $this->uploadimage();
        $this->sumber = $post["sumber"];
        $this->konten = $post["konten"];

        $this->db->update('artikel', $this, array('id_artikel' => $post['id_artikel']));
    }

    public function hapus_artikel($id)
    {
        return $this->db->delete('artikel', array("id_artikel" => $id));
    }

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

    // TOPIK DISKUSI
    public function getAllTopik()
    {
        $query = $this->db->get('topik');
        return $query->result_array();
    }

    public function getTopikById($id)
    {
        $query = $this->db->get_where('topik', array('id_topik' => $id));
        return $query->row_array();
    }

    public function tambah_topik()
    {
        $this->id_topik = uniqid();
        $data = [
            "topik" => $this->input->post('topik', true),
            "nama" => $this->input->post('nama', true),
            "tanggal" => $this->input->post('tanggal', true),
        ];
        $this->db->insert('topik', $data);
    }

    public function edit_topik()
    {
        $post = $this->input->post();
        $this->id_topik = $post["id_topik"];
        $this->topik = $post["topik"];
        $this->tanggal = $post["tanggal"];

        $this->db->update('topik', $this, array('id_topik' => $post['id_topik']));
    }

    public function hapus_topik($id)
    {
        return $this->db->delete('topik', array("id_topik" => $id));
    }

    //TUJUAN DONASI
    public function getAllTujuan()
    {
        $query = $this->db->get('tujuan_donasi');
        return $query->result_array();
    }

    public function getTujuanById($id)
    {
        $query = $this->db->get_where('tujuan_donasi', array('id_tujuan' => $id));
        return $query->row_array();
    }

    public function tambah_tujuan()
    {
        $this->id_tujuan = uniqid();
        $data = [
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "totaldana" => $this->input->post('totaldana', true),
            "image" => $this->uploadImage2(),
            "bni" => $this->input->post('bni', true),
            "bri" => $this->input->post('bri', true),
            "bca" => $this->input->post('bca', true),
            "linkaja" => $this->input->post('linkaja', true),
            "dana" => $this->input->post('dana', true),
            "mandiri" => $this->input->post('mandiri', true),
        ];
        $this->db->insert('tujuan_donasi', $data);
    }

    public function uploadImage2()
    {
        $config['upload_path'] = './upload/tujuandonasi/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->id_tujuan;
        $config['overwrite'] = true;
        // $config['max_size'] = 1024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
    }

    public function edit_tujuan()
    {
        $post = $this->input->post();
        $this->id_tujuan = $post["id_tujuan"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->deskripsi = $post["deskripsi"];
        $this->totaldana = $post["totaldana"];
        $this->image = $this->uploadimage2();
        $this->bni = $post["bni"];
        $this->bri = $post["bri"];
        $this->bca = $post["bca"];
        $this->linkaja = $post["linkaja"];
        $this->dana = $post["dana"];
        $this->mandiri = $post["mandiri"];

        $this->db->update('tujuan_donasi', $this, array('id_tujuan' => $post['id_tujuan']));
    }

    public function hapus_tujuan($id)
    {
        return $this->db->delete('tujuan_donasi', array("id_tujuan" => $id));
    }

    //DONASI
    public function getAllDonasi()
    {
        $query = $this->db->get('donasi');
        return $query->result_array();
    }

    public function hapus_donasi($id)
    {
        return $this->db->delete('donasi', array("id_donasi" => $id));
    }

    public function FilterDonasi($bulan)
    {
        # code...
        $query = $this->db->get_where('donasi', array('MONTH(tgl_donasi)' => $bulan));
        return $query->result_array();
    }

    //KALENDER
    public function getAllKalender()
    {
        $query = $this->db->get('kalender');
        return $query->result_array();
    }

    public function hapus_kalender($id)
    {
        return $this->db->delete('kalender', array("id_kalender" => $id));
    }

    //DETAIL DISKUSI
    public function getAllDetailDiskusi()
    {
        $query = $this->db->get('diskusi');
        return $query->result_array();
    }

    public function hapus_diskusi($id)
    {
        return $this->db->delete('diskusi', array("id_diskusi" => $id));
    }
}
