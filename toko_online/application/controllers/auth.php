<?php 

class auth extends CI_Controller{

    public function login()
    {
        $this->form_validation->set_rules('username','Username','required',['required' => 'Username Wajib Di Isi!']);
        $this->form_validation->set_rules('password','Password','required',['required' => 'Password Wajib Di Isi!']);
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/header');
            $this->load->view('form_login');
            $this->load->view('template/footer');
        }else{
            $auth = $this->model_auth->cek_login();
            if($auth == FALSE)
            {
                $this->session->set_flashdata('pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username Dan Password Anda Salah!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
              redirect('auth/login');
            }else{
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('role_id', $auth->role_id);

                switch($auth->role_id){
                    case 1 : redirect('admin/data_barang/index');
                    break;

                    case 2 : redirect('dashboard');
                    break;
                    default:break;
                }
            }
        }
    }

    //Logout
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}