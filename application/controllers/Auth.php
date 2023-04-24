<?php 


class Auth extends CI_Controller{

    public function __construct(){

        parent::__construct();

        // load model auth
        $this->load->model('Auth_model', 'auth');

    }

    public function index(){

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if($this->form_validation->run()==false){
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        }else{
            // validasi sukses
            $this->_login();
        }

    }

    // private method untuk login!
    private function _login(){

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $akun = $this->auth->get_data_byid($username);
        // var_dump($akun);
        // die;

        // validasi 
        if($akun){
            if(password_verify($password, $akun['password'])){
                $data = [
                    'username' => $akun['username'],
                    'email' => $akun['email']
                ];
                // set session agar tersimpan di halaman selanjutnya
                $this->session->set_userdata($data);

                // redirect ke halaman admin
                redirect('admin');
            }else{
                // notif gagal
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                // redirect ke halaman login
                redirect('auth');
            }
        }else{
            // notif gagal
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not registered!</div>');
            // redirect ke halaman login
            redirect('auth');
        }

    }


    // // registrasi
    // public function daftar(){

    //     $this->form_validation->set_rules('name', 'Name', 'required|trim');
    //     $this->form_validation->set_rules('username', 'Username', 'required|trim');
    //     $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[akun.email]', [
    //         'is_unique' => 'This email has already registered!'
    //     ]);
    //     $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
    //         'matches' => 'Password dont match!',
    //         'min_length' => 'Password too short!'
    //     ]);
    //     $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


    //     if($this->form_validation->run() == false){
    //         $data['title'] = 'Registration Page';
    //         $this->load->view('templates/auth_header', $data);
    //         $this->load->view('auth/daftar_akun');
    //         $this->load->view('templates/auth_footer');
    //     }else{
    //         // insert data ke database
    //         $this->auth->registrasi();

    //         // notif berhasil
    //         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login</div>');
    //         // redirect ke halamam login
    //         redirect('auth');
    //     }

    // }


    // logout 
    public function logout(){
        // membersihkan session
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');

        // notif berhasil jika logout
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');

        // redirect ke halaman login
        redirect('auth');   
    }


}





?>