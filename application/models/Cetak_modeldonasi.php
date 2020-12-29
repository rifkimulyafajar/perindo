<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cetak_modeldonasi extends CI_Model
{
    public function datatabels($bulan)
    {
        $this->db->select('id_user,nama_lengkap,no_hp,email,jmlh_donasi,metode,note,tgl_donasi ');
        $this->db->from('donasi');


        $query = $this->db->get_where('donasi', array('MONTH(tgl_donasi)' => $bulan));
        return $query->result_array();
    }
    public function viewlaporandonasi()
    {
        $this->db->select('id_user,nama_lengkap,no_hp,email,jmlh_donasi,metode,note,tgl_donasi ');
        $query = $this->db->get('donasi');
        return $query->result();
    }

    # code...
}
    



/* End of file Cetak_modeldonasi.php */