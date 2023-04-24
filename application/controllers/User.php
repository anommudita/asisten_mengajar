<?php 


class User extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Galeri_model', 'galeri');
        $this->load->model('Team_model', 'tim');
        $this->load->model('Kegiatan_model', 'kegiatan');
        $this->load->model('Kategori_model', 'kategori');
    }

    public function index(){

        $data['galeri'] = $this->galeri->get_all_galeri();

        $data['title'] = 'Login';
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/templates/nav_home');
        $this->load->view('user/index', $data);
        $this->load->view('user/templates/footer');
    }


    public function tentang()
    {
    

        $data['nav'] = 'tentang';
        $data['title'] = 'Tentang';
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/templates/nav');
        $this->load->view('user/tentang', $data);
        $this->load->view('user/templates/footer');
    }

    public function kegiatan()
    {

        $data['kategori'] = $this->kategori->get_all_category();
        $data['kegiatan'] = $this->kegiatan->get_all_kegiatan();
        $data['nav'] = 'kegiatan';
        $data['title'] = 'kegiatan';
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/templates/nav');
        $this->load->view('user/kegiatan', $data);
        $this->load->view('user/templates/footer');
    }


    public function kegiatan_detail($id)
    {

        $data['kategori'] = $this->kategori->get_all_category();
        $data['kegiatan'] = $this->kegiatan->get_kegiatan_byid($id);
        $data['nav'] = 'kegiatan';
        $data['title'] = 'kegiatan';
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/templates/nav');
        $this->load->view('user/kegiatan_detail', $data);
        $this->load->view('user/templates/footer');
    }


    public function tim()
    {

        $data['kategori'] = $this->kategori->get_all_category();
        $data['tim'] = $this->tim->get_all_team();
        $data['nav'] = 'tim';
        $data['title'] = 'tim';

        if ($this->input->post('keyword_team')) {
            $data['tim'] = $this->tim->search_team();
        }

        $this->load->view('user/templates/header', $data);
        $this->load->view('user/templates/nav');
        $this->load->view('user/tim', $data);
        $this->load->view('user/templates/footer');
    }

}



?>