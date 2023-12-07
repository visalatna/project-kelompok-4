<?php  

class model_kategori extends CI_Model{

    public function data_elektronik()
    {
       return $this->db->get_where("tb_barang", array('kategori'=>'elektronik'));
    }

    public function data_pakaian_laki_laki()
    {
       return $this->db->get_where("tb_barang", array('kategori'=>'pakaian laki - laki'));
    }

    public function data_pakaian_wanita()
    {
       return $this->db->get_where("tb_barang", array('kategori'=>'pakaian wanita'));
    }

    public function data_pakaian_anak_anak()
    {
       return $this->db->get_where("tb_barang", array('kategori'=>'pakaian anak - anak'));
    }

    public function data_sepatu_laki_laki()
    {
       return $this->db->get_where("tb_barang", array('kategori'=>'sepatu laki - laki'));
    }

    public function data_sepatu_wanita()
    {
       return $this->db->get_where("tb_barang", array('kategori'=>'sepatu wanita'));
    }

   

}