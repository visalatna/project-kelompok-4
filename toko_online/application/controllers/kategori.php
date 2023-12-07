<?php 

class kategori extends CI_Controller{

    public function elektronik()
    {
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('elektronik', $data);
        $this->load->view('template/footer');
    }

    public function pakaian_laki_laki()
    {
        $data['pakaian_laki_laki'] = $this->model_kategori->data_pakaian_laki_laki()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pakaian_laki_laki', $data);
        $this->load->view('template/footer');
    }

    public function pakaian_wanita()
    {
        $data['pakaian_wanita'] = $this->model_kategori->data_pakaian_wanita()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pakaian_wanita', $data);
        $this->load->view('template/footer');
    }

    public function pakaian_anak_anak()
    {
        $data['pakaian_anak_anak'] = $this->model_kategori->data_pakaian_anak_anak()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pakaian_anak_anak', $data);
        $this->load->view('template/footer');
    }

    public function sepatu_laki_laki()
    {
        $data['sepatu_laki_laki'] = $this->model_kategori->data_sepatu_laki_laki()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('sepatu_laki_laki', $data);
        $this->load->view('template/footer');
    }

    public function sepatu_wanita()
    {
        $data['sepatu_wanita'] = $this->model_kategori->data_sepatu_wanita()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('sepatu_wanita', $data);
        $this->load->view('template/footer');
    }

}