<?php 


class Admin extends CI_Controller{

    // constractor
    public function __construct(){
        
        parent::__construct();

        // database dari  model kegiatan
        $this->load->model('Kegiatan_model', 'kegiatan');
        // database dari  model kategori
        $this->load->model('Kategori_model', 'kategori');

        // database dari model tim
        $this->load->model('Team_model', 'tim');

        // database dari model dosen dan guru pamong
        $this->load->model('Dosen_gp_model', 'dosen_gp');

        //  database dari model galeri 
        $this->load->model('Galeri_model', 'galeri');

        // database dari model auth
        $this->load->model('Auth_model', 'auth');

        // form validation 
        $this->load->library('form_validation');

        // pagination
        $this->load->library('pagination');

        // cek session untuk username
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        // cek session untuk email
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        //mengambil data dari session setelah login!
        $data['akun'] = $this->auth->get_data_byid($this->session->userdata('username'));
        // var_dump($data['akun']);
        // die;

    }


    // index dari admin
    public function index(){
        // cek session untuk username
        if(!$this->session->userdata('username')){
            redirect('auth');
        }

        // cek session untuk email
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        //mengambil data dari session setelah login!
        $data['akun'] = $this->auth->get_data_byid($this->session->userdata('username'));
        // var_dump($data['akun']);
        // die;


        $data['countallkegiatan'] = $this->kegiatan->countAllKegiatan();
        $data['countallteam'] = $this->tim->countAllTeam();
        $data['countallgaleri'] = $this->galeri->countAllGaleri();
        $data['countallkategori'] = $this->kategori->countAllCategory();


        $data['beranda'] = 'Beranda';
        $data['kegiatan'] = 'Kegiatan';
        $data['tim'] = 'Tim';
        $data['galeri'] = 'Galeri';
        $data['my_profile'] = 'My Profile';
        $data['edit_profile'] = 'Edit Profile';
        $data['change_password'] = 'Change Password';
        $data['tentang'] = 'Tentang';
        $data['logout']= 'Logout';
        $data['title'] = 'Administrator';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }



    //kegiatan
    public function kegiatan(){

        // cek session untuk username
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        // cek session untuk email
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        //mengambil data dari session setelah login!
        $data['akun'] = $this->auth->get_data_byid($this->session->userdata('username'));
        // var_dump($data['akun']);
        // die;


        // fitur searching
        if ($this->input->post('submit')) {
            $data['kegiatan1'] = $this->kegiatan->search_kegiatan();
        }

        $data['beranda'] = 'Beranda';
        $data['kegiatan'] = 'Kegiatan';
        $data['tim'] = 'Tim';
        $data['galeri'] = 'Galeri';
        $data['my_profile'] = 'My Profile';
        $data['edit_profile'] = 'Edit Profile';
        $data['change_password'] = 'Change Password';
        $data['tentang'] = 'Tentang';
        $data['logout'] = 'Logout';
        $data['title'] = 'Administrator';
        $data['title2'] = 'Kegiatan';
        $data['kegiatan1'] = $this->kegiatan->get_all_kegiatan();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/kegiatan/index', $data);
        $this->load->view('templates/footer');
    }

    // tambah kegiatan
    public function tambah_kegiatan(){
        // cek session untuk username
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        // cek session untuk email
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }



        //mengambil data dari session setelah login!
        $data['akun'] = $this->auth->get_data_byid($this->session->userdata('username'));
        // var_dump($data['akun']);
        // die;


        // get data kategori
        $data['kategori'] = $this->kategori->get_all_category();
        
        // form validation
        $this->form_validation->set_rules(
            'nama_kegiatan',
            'Nama_kegiatan',
            'required|trim',
            [
                'required' => 'Judul tidak boleh kosong!'
            ]
        );
        $this->form_validation->set_rules(
            'content',
            'Content',
            'required|trim',
            [
                'required' => 'Konten tidak boleh kosong!'
            ]
        );

        if ($this->form_validation->run() == false) {
            $data['beranda'] = 'Beranda';
            $data['kegiatan'] = 'Kegiatan';
            $data['tim'] = 'Tim';
            $data['galeri'] = 'Galeri';
            $data['my_profile'] = 'My Profile';
            $data['edit_profile'] = 'Edit Profile';
            $data['change_password'] = 'Change Password';
            $data['tentang'] = 'Tentang';
            $data['logout'] = 'Logout';
            $data['title'] = 'Administrator';
            $data['title2'] = 'Tambah Kegiatan';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/kegiatan/tambah_kegiatan', $data);
            $this->load->view('templates/footer');
        } else {

            // upload gambar
            // cek jika ada gambar yang akan diupload atau tidak  dari variable $_FILES
            $upload_image1 = $_FILES['image1']['name'];
            $upload_image2 = $_FILES['image2']['name'];
            // var_dump($upload_image1);
            // var_dump($upload_image2);
            // die;

            // user tidak boleh upload file berbahaya dan ukuran file yang besar
            if ($upload_image1 && $upload_image2) {
                // file format yang boleh diupload
                $config['allowed_types'] = 'gif|jpg|png|heic';

                // ukuran file yang boleh diupload lebh dari 5mb
                $config['max_size'] = '5120';

                // lokasi penyimpanan file
                $config['upload_path'] = './assets/img/kegiatan/';

                // resolusi gambar yang diupload
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                // load library upload
                $this->load->library('upload', $config);

                // cek apakah file berhasil diupload digambar 1
                if ($this->upload->do_upload('image1')) {
                    // jika berhasil
                    $new_image1 = $this->upload->data('file_name');

                } else {
                    // jika gagal
                    echo $this->upload->display_errors();
                }

                // cek apakah file berhasil diupload digambar 2
                if($this->upload->do_upload('image2')){
                    // jika berhasil
                    $new_image2 = $this->upload->data('file_name');
                }else{
                    echo $this->upload->display_errors();
                }

            }

            // berhasil add kegiatan 
            $this->kegiatan->insert_kegiatan($new_image1, $new_image2);

            // flashdata
            $this->session->set_flashdata('flash', 'ditambahkan!');

            redirect('admin/kegiatan');
        }
    }

    // hapus kegiatan
    public function hapus_kegiatan($id)
    {

        $data['kegiatan'] = $this->kegiatan->get_kegiatan_byid($id);


        // delete gambar 1
        $old_image1 = $data['kegiatan']['gambar1'];
        if ($old_image1) {
            unlink(FCPATH . 'assets/img/kegiatan/' . $old_image1);
        }

        // delete gambar 2
        $old_image2 = $data['kegiatan']['gambar2'];
        if ($old_image2) {
            unlink(FCPATH . 'assets/img/kegiatan/' . $old_image2);
        }

        $this->kegiatan->delete_kegiatan($id);
        redirect('admin/kegiatan');
    }

    // edit kegiatan
    public function edit_kegiatan($id)
    {
        // cek session untuk username
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        // cek session untuk email
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        //mengambil data dari session setelah login!
        $data['akun'] = $this->auth->get_data_byid($this->session->userdata('username'));
        // var_dump($data['akun']);
        // die;
        
        $data['kegiatan1'] = $this->kegiatan->get_kegiatan_byid($id);

        // get data kategori
        $data['kategori'] = $this->kategori->get_all_category();

        // form validation
        $this->form_validation->set_rules(
            'nama_kegiatan',
            'Nama_kegiatan',
            'required|trim',
            [
                'required' => 'Judul tidak boleh kosong!'
            ]
        );
        $this->form_validation->set_rules(
            'content',
            'Content',
            'required|trim',
            [
                'required' => 'Konten tidak boleh kosong!'
            ]
        );

        if ($this->form_validation->run() == false) {
            $data['beranda'] = 'Beranda';
            $data['kegiatan'] = 'Kegiatan';
            $data['tim'] = 'Tim';
            $data['galeri'] = 'Galeri';
            $data['my_profile'] = 'My Profile';
            $data['edit_profile'] = 'Edit Profile';
            $data['change_password'] = 'Change Password';
            $data['tentang'] = 'Tentang';
            $data['logout'] = 'Logout';
            $data['title'] = 'Administrator';
            $data['title2'] = 'Edit Kegiatan';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/kegiatan/edit_kegiatan', $data);
            $this->load->view('templates/footer');
        } else {

            // upload gambar
            // cek jika ada gambar yang akan diupload atau tidak  dari variable $_FILES
            $upload_image1 = $_FILES['image1']['name'];
            $upload_image2 = $_FILES['image2']['name'];


            // user tidak boleh upload file berbahaya dan ukuran file yang besar
            if ($upload_image1 || $upload_image2) {
                // file format yang boleh diupload
                $config['allowed_types'] = 'gif|jpg|png|heic';

                // ukuran file yang boleh diupload lebh dari 5mb
                $config['max_size'] = '5120';

                // lokasi penyimpanan file
                $config['upload_path'] = './assets/img/kegiatan/';

                // resolusi gambar yang diupload
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                // load library upload
                $this->load->library('upload', $config);

                // cek apakah file berhasil diupload digambar 1
                if ($this->upload->do_upload('image1')) {
                    // jika berhasil
                    $new_image1 = $this->upload->data('file_name');

                    // replace gambar 1
                    $old_image1 = $data['kegiatan1']['gambar1'];
                    if ($old_image1) {
                        unlink(FCPATH . 'assets/img/kegiatan/' . $old_image1);
                    }

                } else {
                    // jika tidak upload gambar 1
                    $new_image1 = $data['kegiatan1']['gambar1'];
                    // jika gagal
                    echo $this->upload->display_errors();
                }

                // cek apakah file berhasil diupload digambar 2
                if ($this->upload->do_upload('image2')) {
                    // jika berhasil
                    $new_image2 = $this->upload->data('file_name');

                    // replace gambar 2
                    $old_image2 = $data['kegiatan1']['gambar2'];
                    if ($old_image2) {
                        unlink(FCPATH . 'assets/img/kegiatan/' . $old_image2);
                    }
                } else {
                    // jika tidak upload gambar 2
                    $new_image2 = $data['kegiatan1']['gambar2'];    
                    echo $this->upload->display_errors();
                }
            }else{
                // jika tidak upload gambar 1 dan gambar 2
                $new_image1 = $data['kegiatan1']['gambar1'];
                $new_image2 = $data['kegiatan1']['gambar2'];    

            }

            // berhasil add kegiatan 
            $this->kegiatan->edit_kegiatan($id, $new_image1, $new_image2);

            // flashdata
            $this->session->set_flashdata('flash', 'diedit!');

            redirect('admin/kegiatan');
        }
    }


    // kategori
    public function kategori(){
        // cek session untuk username
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        // cek session untuk email
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        //mengambil data dari session setelah login!
        $data['akun'] = $this->auth->get_data_byid($this->session->userdata('username'));
        // var_dump($data['akun']);
        // die;

        $data['beranda'] = 'Beranda';
        $data['kegiatan'] = 'Kegiatan';
        $data['tim'] = 'Tim';
        $data['galeri'] = 'Galeri';
        $data['my_profile'] = 'My Profile';
        $data['edit_profile'] = 'Edit Profile';
        $data['change_password'] = 'Change Password';
        $data['tentang'] = 'Tentang';
        $data['logout'] = 'Logout';
        $data['title'] = 'Administrator';
        $data['title2'] = 'Kategori';

        // get all data kategori
        $data['kategori'] = $this->kategori->get_all_category();

        // perkondisian untuk searching data kategori
        if($this->input->post('keyword_category')){
            $data['kategori'] = $this->kategori->search_category();
        }

        // pagination searching
        if($this->input->post('submit')){
            $data['keyword'] =  $this->input->post('keyword_category');

            // data akan terus dilanjutkan ketika di search dan akan disimpan di session
            $this->session->set_userdata('keyword', $data['keyword']);
        }else{
            //  mengambil data dari session;
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // config pagination
        $config['base_url'] = 'http://localhost/asisten_mengajar/admin/kategori/index';

        // total data semua kategori
        // $this->db->count_all_results(); ==> method berdasarkan query terakhir yang kita inputkan
        $this->db->like('name', $data['keyword']);
        $this->db->or_like('deskripsi', $data['keyword']);
        $this->db->from('kategori');
        $config['total_rows'] = $this->db->count_all_results();

        // menampilkan semua data kategori
        $data['all_kategori'] = $config['total_rows'];

        $config['per_page'] = 5;
        $config['num_links'] = 3;


        $this->pagination->initialize($config);

        // pagination data kategori
        $data['start'] = $this->uri->segment(4);
        $data['kategori'] = $this->kategori->get_all_category_pagination($config['per_page'], $data['start'], $data['keyword']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/kategori/index', $data);
        $this->load->view('templates/footer');
    }


    // tambah kategori
    public function tambah_kategori(){
        // cek session untuk username
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        // cek session untuk email
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        //mengambil data dari session setelah login!
        $data['akun'] = $this->auth->get_data_byid($this->session->userdata('username'));
        // var_dump($data['akun']);
        // die;


        // form validation
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required|trim', 
        [
            'required' => 'Nama Kategori tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim', 
        [
            'required' => 'Deskripsi tidak boleh kosong!'
        ]);

        if($this->form_validation->run() == false){
            $data['beranda'] = 'Beranda';
            $data['kegiatan'] = 'Kegiatan';
            $data['tim'] = 'Tim';
            $data['galeri'] = 'Galeri';
            $data['my_profile'] = 'My Profile';
            $data['edit_profile'] = 'Edit Profile';
            $data['change_password'] = 'Change Password';
            $data['tentang'] = 'Tentang';
            $data['logout'] = 'Logout';
            $data['title'] = 'Administrator';
            $data['title2'] = 'Tambah Kategori';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/kategori/tambah_kategori', $data);
            $this->load->view('templates/footer');
        }else{
            // berhasil add kategori
            $this->kategori->insert_category();

            // flashdata
            $this->session->set_flashdata('flash', 'ditambahkan!');

            redirect('admin/kategori');
        }
    }

    // edit kategori
    public function edit_kategori($id){
        // cek session untuk username
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        // cek session untuk email
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        //mengambil data dari session setelah login!
        $data['akun'] = $this->auth->get_data_byid($this->session->userdata('username'));
        // var_dump($data['akun']);
        // die;


        // form validation
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');

        // get data by id
        $data['kategori'] = $this->kategori->get_category_byid($id);

        if ($this->form_validation->run() == false) {
            $data['beranda'] = 'Beranda';
            $data['kegiatan'] = 'Kegiatan';
            $data['tim'] = 'Tim';
            $data['galeri'] = 'Galeri';
            $data['my_profile'] = 'My Profile';
            $data['edit_profile'] = 'Edit Profile';
            $data['change_password'] = 'Change Password';
            $data['tentang'] = 'Tentang';
            $data['logout'] = 'Logout';
            $data['title'] = 'Administrator';
            $data['title2'] = 'Edit Kategori';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/kategori/edit_kategori', $data);
            $this->load->view('templates/footer');
        } else {
            // berhasil edit kategori
            $this->kategori->edit_category($id);

            // flashdata
            $this->session->set_flashdata('flash', 'diedit!');
            redirect('admin/kategori');
        }
    }

    // hapus kategori
    public function hapus_kategori($id){

        $this->kategori->delete_category($id);
        redirect('admin/kategori');
        
    }

    // data dosen dan guru pamong
    public function dosen_gp()
    {
        // cek session untuk username
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        // cek session untuk email
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        //mengambil data dari session setelah login!
        $data['akun'] = $this->auth->get_data_byid($this->session->userdata('username'));
        // var_dump($data['akun']);
        // die;

        $data['beranda'] = 'Beranda';
        $data['kegiatan'] = 'Kegiatan';
        $data['tim'] = 'Tim';
        $data['galeri'] = 'Galeri';
        $data['my_profile'] = 'My Profile';
        $data['edit_profile'] = 'Edit Profile';
        $data['change_password'] = 'Change Password';
        $data['tentang'] = 'Tentang';
        $data['logout'] = 'Logout';
        $data['title'] = 'Administrator';
        $data['title2'] = 'Dosen dan Guru Pamong';

        // get all data dosen dan guru pamong
        $data['dosen_gp'] = $this->dosen_gp->get_all_dosen_gp();

        // perkondisian untuk searching data dosen dan guru pamong
        if ($this->input->post('keyword_dosen_gp')) {
            $data['dosen_gp'] = $this->dosen_gp->search_dosen_gp();
        }

        // pagination searching
        if ($this->input->post('submit')) {
            $data['keyword'] =  $this->input->post('keyword_dosen_gp');

            // data akan terus dilanjutkan ketika di search dan akan disimpan di session
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            //  mengambil data dari session;
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // config pagination
        $config['base_url'] = 'http://localhost/asisten_mengajar/admin/dosen_gp/index';

        // total data semua dosen dan guru pamong
        $this->db->like('nama', $data['keyword']);
        $this->db->or_like('nip', $data['keyword']);
        $this->db->or_like('sebagai', $data['keyword']);
        $this->db->from('dosen_gp');
        $config['total_rows'] = $this->db->count_all_results();

        // menampilkan semua data dosen dan guru pamong
        $data['all_dosen_gp'] = $config['total_rows'];

        $config['per_page'] = 5;
        $config['num_links'] = 3;

        $this->pagination->initialize($config);

        // pagination data dosen dan guru pamong
        $data['start'] = $this->uri->segment(4);
        $data['dosen_gp'] = $this->dosen_gp->get_all_dosen_gp_pagination($config['per_page'], $data['start'], $data['keyword']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/dosen_gp/index', $data);
        $this->load->view('templates/footer');
    }

    // tambah data dosen dan guru pamong
    public function tambah_dosen_gp()
    {
        // cek session untuk username
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        // cek session untuk email
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        //mengambil data dari session setelah login!
        $data['akun'] = $this->auth->get_data_byid($this->session->userdata('username'));
        // var_dump($data['akun']);
        // die;

        // form validation
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required|trim',
            [
                'required' => 'Nama lengkap tidak boleh kosong!'
            ]
        );
        $this->form_validation->set_rules(
            'nip',
            'nip',
            'required|trim',
            [
                'required' => 'NIP tidak boleh kosong!'
            ]
        );

        if ($this->form_validation->run() == false) {
            $data['beranda'] = 'Beranda';
            $data['kegiatan'] = 'Kegiatan';
            $data['tim'] = 'Tim';
            $data['galeri'] = 'Galeri';
            $data['my_profile'] = 'My Profile';
            $data['edit_profile'] = 'Edit Profile';
            $data['change_password'] = 'Change Password';
            $data['tentang'] = 'Tentang';
            $data['logout'] = 'Logout';
            $data['title'] = 'Administrator';
            $data['title2'] = 'Tambah Dosen atau Guru Pamong';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/dosen_gp/tambah_dosen_gp', $data);
            $this->load->view('templates/footer');
        } else {
            // berhasil add dosen dan guru pamong
            $this->dosen_gp->insert_dosen_gp();

            // flashdata
            $this->session->set_flashdata('flash', 'ditambahkan');

            redirect('admin/dosen_gp');
        }
    }

    // hapus data dosen dan guru pamong
    public function hapus_dosen_gp($id)
    {
        $this->dosen_gp->delete_dosen_gp($id);
        redirect('admin/dosen_gp');
    }

    // edit data dosen dan guru pamong
    public function edit_dosen_gp($id)
    {
        // cek session untuk username
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        // cek session untuk email
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        //mengambil data dari session setelah login!
        $data['akun'] = $this->auth->get_data_byid($this->session->userdata('username'));
        // var_dump($data['akun']);
        // die;

        // form validation
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required|trim',
            [
                'required' => 'Nama lengkap tidak boleh kosong!'
            ]
        );
        $this->form_validation->set_rules(
            'nip',
            'nip',
            'required|trim',
            [
                'required' => 'NIP tidak boleh kosong!'
            ]
        );

        // select by id dosen_gp
        $data['dosen_gp'] = $this->dosen_gp->get_dosen_gp_byid($id);

        if ($this->form_validation->run() == false) {
            $data['beranda'] = 'Beranda';
            $data['kegiatan'] = 'Kegiatan';
            $data['tim'] = 'Tim';
            $data['galeri'] = 'Galeri';
            $data['my_profile'] = 'My Profile';
            $data['edit_profile'] = 'Edit Profile';
            $data['change_password'] = 'Change Password';
            $data['tentang'] = 'Tentang';
            $data['logout'] = 'Logout';
            $data['title'] = 'Administrator';
            $data['title2'] = 'Edit Dosen atau Guru Pamong';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/dosen_gp/edit_dosen_gp', $data);
            $this->load->view('templates/footer');
        } else {
            // berhasil edit dosen dan guru pamong
            $this->dosen_gp->edit_dosen_gp($id);

            // flashdata
            $this->session->set_flashdata('flash', 'diedit');

            redirect('admin/dosen_gp');
        }
    }


    // tim all
    public function tim()
    {
        // cek session untuk username
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        // cek session untuk email
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        //mengambil data dari session setelah login!
        $data['akun'] = $this->auth->get_data_byid($this->session->userdata('username'));
        // var_dump($data['akun']);
        // die;

        $data['beranda'] = 'Beranda';
        $data['kegiatan'] = 'Kegiatan';
        $data['tim'] = 'Tim';
        $data['galeri'] = 'Galeri';
        $data['my_profile'] = 'My Profile';
        $data['edit_profile'] = 'Edit Profile';
        $data['change_password'] = 'Change Password';
        $data['tentang'] = 'Tentang';
        $data['logout'] = 'Logout';
        $data['title'] = 'Administrator';
        $data['title2'] = 'Tim';

        // get all data Team
        $data['team'] = $this->tim->get_all_team();

        // perkondisian untuk searching data kategori
        if ($this->input->post('keyword_team')) {
            $data['team'] = $this->tim->search_team();
        }

        // pagination searching
        if ($this->input->post('submit')) {
            $data['keyword'] =  $this->input->post('keyword_team');

            // mengambil data dari session
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            // mengambil data dari session
            $data['keyword'] = $this->session->userdata('keyword');

        }
        // config pagination
        $config['base_url'] = 'http://localhost/asisten_mengajar/admin/tim/index';

        // total data semua nama tim!
        $this->db->like('nim', $data['keyword']);
        $this->db->or_like('name', $data['keyword']);
        $this->db->or_like('prodi', $data['keyword']);
        $this->db->or_like('jabatan', $data['keyword']);
        $this->db->or_like('keahlian', $data['keyword']);
        $this->db->from('team');
        $config['total_rows'] = $this->db->count_all_results();

        // menampilkan semua data dosen dan guru pamong
        $data['all_tim'] = $config['total_rows'];

        $config['per_page'] = 10;
        $config['num_links'] = 3;

        $this->pagination->initialize($config);

        // pagination data kategori
        $data['start'] = $this->uri->segment(4);
        $data['team'] = $this->tim->get_all_team_pagination($config['per_page'], $data['start'], $data['keyword']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/tim/index', $data);
        $this->load->view('templates/footer');

    }

    // tambah tim
    public function tambah_tim()
    {
        // cek session untuk username
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        // cek session untuk email
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        //mengambil data dari session setelah login!
        $data['akun'] = $this->auth->get_data_byid($this->session->userdata('username'));
        // var_dump($data['akun']);
        // die;

        // form validation
        $this->form_validation->set_rules(
            'name',
            'Name',
            'required|trim',
            [
                'required' => 'Nama lengkap tidak boleh kosong!'
            ]
        );
        $this->form_validation->set_rules(
            'nim',
            'NIM',
            'required|trim',
            [
                'required' => 'NIM tidak boleh kosong!'
            ]
        );

        $this->form_validation->set_rules(
            'sosmed',
            'Sosmed',
            'required|trim',
            [
                'required' => 'Sosial Media tidak boleh kosong!'
            ]
        );


        if ($this->form_validation->run() == false) {
            $data['beranda'] = 'Beranda';
            $data['kegiatan'] = 'Kegiatan';
            $data['tim'] = 'Tim';
            $data['galeri'] = 'Galeri';
            $data['my_profile'] = 'My Profile';
            $data['edit_profile'] = 'Edit Profile';
            $data['change_password'] = 'Change Password';
            $data['tentang'] = 'Tentang';
            $data['logout'] = 'Logout';
            $data['title'] = 'Administrator';
            $data['title2'] = 'Tambah Tim';
            
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tim/tambah_tim', $data);
            $this->load->view('templates/footer');
        } else {

            // upload gambar
            // cek jika ada gambar yang akan diupload atau tidak  dari variable $_FILES
            $upload_image = $_FILES['image']['name'];
            // var_dump($upload_image);
            // die;

            // user tidak boleh upload file berbahaya dan ukuran file yang besar
            if($upload_image){
                // file format yang boleh diupload
                $config['allowed_types'] = 'gif|jpg|png|heic';

                // ukuran file yang boleh diupload lebh dari 5mb
                $config['max_size'] = '5120';

                // lokasi penyimpanan file
                $config['upload_path'] = './assets/img/team/';

                // resolusi gambar yang diupload
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                // load library upload
                $this->load->library('upload', $config);

                // cek apakah file berhasil diupload
                if($this->upload->do_upload('image')){
                    // jika berhasil
                    $new_image = $this->upload->data('file_name');

                    // insert data ke database
                    $this->tim->insert_team($new_image);

                }else{
                    // jika gagal
                    echo $this->upload->display_errors();      
                }
                
            }

            // flashdata
            $this->session->set_flashdata('flash',
                'ditambahkan!'
            );

            redirect('admin/tim');
        }
    }

    // hapus team
    public function hapus_tim($id)
    {

        $data['team'] = $this->tim->get_team_byid($id);
        $old_image = $data['team']['gambar'];
        if($old_image){
            unlink(FCPATH . 'assets/img/team/' . $old_image);
        }
        
        $this->tim->delete_team($id);
        redirect('admin/tim');
    }

    // edit tim
    public function edit_tim($id)
    {
        // cek session untuk username
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        // cek session untuk email
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        //mengambil data dari session setelah login!
        $data['akun'] = $this->auth->get_data_byid($this->session->userdata('username'));
        // var_dump($data['akun']);
        // die;

        // form validation
        $this->form_validation->set_rules(
            'name',
            'Name',
            'required|trim',
            [
                'required' => 'Nama lengkap tidak boleh kosong!'
            ]
        );
        $this->form_validation->set_rules(
            'nim',
            'NIM',
            'required|trim',
            [
                'required' => 'NIM tidak boleh kosong!'
            ]
        );

        // get data by id
        $data['team'] = $this->tim->get_team_byid($id);

        if ($this->form_validation->run() == false) {
            $data['beranda'] = 'Beranda';
            $data['kegiatan'] = 'Kegiatan';
            $data['tim'] = 'Tim';
            $data['galeri'] = 'Galeri';
            $data['my_profile'] = 'My Profile';
            $data['edit_profile'] = 'Edit Profile';
            $data['change_password'] = 'Change Password';
            $data['tentang'] = 'Tentang';
            $data['logout'] = 'Logout';
            $data['title'] = 'Administrator';
            $data['title2'] = 'Edit Tim';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tim/edit_tim', $data);
            $this->load->view('templates/footer');
        } else {

            // upload gambar
            // cek jika ada gambar yang akan diupload atau tidak  dari variable $_FILES
            $upload_image = $_FILES['image']['name'];
            // var_dump($upload_image);
            // die;

            // user tidak boleh upload file berbahaya dan ukuran file yang besar
            if ($upload_image) {
                // file format yang boleh diupload
                $config['allowed_types'] = 'gif|jpg|png|heic';

                // ukuran file yang boleh diupload lebh dari 5mb
                $config['max_size'] = '5120';

                // lokasi penyimpanan file
                $config['upload_path'] = './assets/img/team/';

                // resolusi gambar yang diupload
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                // load library upload
                $this->load->library('upload', $config);

                // cek apakah file berhasil diupload
                if ($this->upload->do_upload('image')) {
                    // jika berhasil
                    $new_image = $this->upload->data('file_name');

                    // gambar lama
                    $old_image = $data['team']['gambar'];
                    if ($old_image) {
                        unlink(FCPATH . 'assets/img/team/' . $old_image);
                    }

                } else {
                    // jika gagal
                    echo $this->upload->display_errors();
                }
            }else{
                // jika tidak ada gambar yang diupload
                $new_image = $data['team']['gambar'];
            }


            $this->tim->edit_team($id, $new_image);

            // flashdata
            $this->session->set_flashdata('flash', 'diedit!');
            redirect('admin/tim');
        }

    }


    // my profil admin 
    public function myprofile(){
        // cek session untuk username
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        // cek session untuk email
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        //mengambil data dari session setelah login!
        $data['akun'] = $this->auth->get_data_byid($this->session->userdata('username'));
        // var_dump($data['akun']);
        // die;

        $data['beranda'] = 'Beranda';
        $data['kegiatan'] = 'Kegiatan';
        $data['tim'] = 'Tim';
        $data['galeri'] = 'Galeri';
        $data['my_profile'] = 'My Profile';
        $data['edit_profile'] = 'Edit Profile';
        $data['change_password'] = 'Change Password';
        $data['tentang'] = 'Tentang';
        $data['logout'] = 'Logout';
        $data['title'] = 'Administrator';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/myprofile', $data);
        $this->load->view('templates/footer');
    }


    // edit profil admin 
    public function editprofile(){
        // cek session untuk username
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        // cek session untuk email
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        //mengambil data dari session setelah login!
        $data['akun'] = $this->auth->get_data_byid($this->session->userdata('username'));
        // var_dump($data['akun']);
        // die;

        // form validation
        $this->form_validation->set_rules(
            'name',
            'Name',
            'required|trim',
            [
                'required' => 'Nama tidak boleh kosong!'
            ]
        );

        if($this->form_validation->run() == false ){
            $data['beranda'] = 'Beranda';
            $data['kegiatan'] = 'Kegiatan';
            $data['tim'] = 'Tim';
            $data['galeri'] = 'Galeri';
            $data['my_profile'] = 'My Profile';
            $data['edit_profile'] = 'Edit Profile';
            $data['change_password'] = 'Change Password';
            $data['tentang'] = 'Tentang';
            $data['logout'] = 'Logout';
            $data['title'] = 'Administrator';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/editprofile', $data);
            $this->load->view('templates/footer');
        }else{
            // upload gambar
            // cel jika ada gambar di upload atau tidak dari variable $_FILES
            $upload_image = $_FILES['gambar']['name'];
            // var_dump($upload_image);
            // die;

            if($upload_image){
                // file format yang boleh diupload
                $config['allowed_types'] = 'gif|jpg|png|jpeg|heic';

                // ukuran file yang boleh diupload lebh dari 5mb
                $config['max_size'] = '5120';

                // lokasi penyimpanan file
                $config['upload_path'] = './assets/img/admin/';

                // resolusi gambar yang diupload
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                // load library upload  
                $this->load->library('upload', $config);

                // cek apakah file berhasil diupload
                if($this->upload->do_upload('gambar')){

                    // hapus gambar lama
                    $old_image = $data['akun']['gambar'];
                    if($old_image){
                        unlink(FCPATH . 'assets/img/admin/' . $old_image);
                    }

                    // add gambar baru 
                    $new_image = $this->upload->data('file_name');

                }else{
                    // jika gagal
                    echo $this->upload->display_errors();
                }
            }else{
                // jika tidak ada gambar yang diupload
                $new_image = $data['akun']['gambar'];
            }

            $this->auth->editprofileadmin($new_image);
            // flashdata
            $this->session->set_flashdata('flash', 'diedit!');
            redirect('admin/myprofile');
        }
    }


    // change password admin
    public function changepassword(){
        // cek session untuk username
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        // cek session untuk email
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        //mengambil data dari session setelah login!
        $data['akun'] = $this->auth->get_data_byid($this->session->userdata('username'));
        // var_dump($data['akun']);
        // die;

        // form validation
        // password lama
        $this->form_validation->set_rules(
            'passwordcurrent',
            'PasswordCurrent',
            'required|trim',
            [
                'required' => 'Password tidak boleh kosong!'
            ]
        );

        // password baru dan konfirmasi password baru
        $this->form_validation->set_rules(
            'passwordnew',
            'PasswordNew',
            'required|trim|min_length[8]|matches[passwordconfirm]',
            [
                'matches' => "Password tidak sama!",
                'min_length' => "Password terlalu pendek!",
                'required' => 'Password baru tidak boleh kosong!'
            ]
            );

        // password konfirmasi 
        $this->form_validation->set_rules(
            'passwordconfirm',
            'PasswordConfirm',
            'required|trim|min_length[8]|matches[passwordnew]',
            [
                'required' => 'Konfirmasi password tidak boleh kosong!',
                'matches' => "Password tidak sama!",
            ]
        );

        // form validation 
        if($this->form_validation->run()== false){
            $data['beranda'] = 'Beranda';
            $data['kegiatan'] = 'Kegiatan';
            $data['tim'] = 'Tim';
            $data['galeri'] = 'Galeri';
            $data['my_profile'] = 'My Profile';
            $data['edit_profile'] = 'Edit Profile';
            $data['change_password'] = 'Change Password';
            $data['tentang'] = 'Tentang';
            $data['logout'] = 'Logout';
            $data['title'] = 'Administrator';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/changepassword', $data);
            $this->load->view('templates/footer');
        }else{
            // cek input password lama dan password baru
            $currentpassword =  $this->input->post('passwordcurrent');
            $newpassword = $this->input->post('passwordnew');

            // perkondisian pasword lama dan password baru
            // password diterjemahkan dengan password_verify
            if(!password_verify($currentpassword, $data['akun']['password'])){
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password lama salah!</div>');
                redirect('admin/changepassword');
            }else{
                // jika password lama dan password baru sama 
                if($currentpassword == $newpassword){
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password baru tidak boleh sama dengan password lama!</div>');
                    redirect('admin/changepassword');
                }else{
                    // jika password benar
                    // password di enkripsi
                    $password_hash = password_hash($newpassword, PASSWORD_DEFAULT);
                    // var_dump($password_hash);
                    // die;

                    // update password 
                    $this->auth->updatepassword($password_hash);
                    // flashdata
                    $this->session->set_flashdata('message',
                        '<div class="alert alert-success" role="alert">Password berhasil dirubah. Silahkan login ulang</div>'
                    );
                    // redirect
                    redirect('admin/changepassword');
                }
            }

        }

    }
    
    // galeri 
    public function galeri(){
        // cek session untuk username
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        // cek session untuk email
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        //mengambil data dari session setelah login!
        $data['akun'] = $this->auth->get_data_byid($this->session->userdata('username'));
        // var_dump($data['akun']);
        // die;

        // all data galeri
        $data['galeri1'] = $this->galeri->get_all_galeri();

        // searching galeri 
        if($this->input->post('submit')){
            $data['galeri1'] = $this->galeri->search_galeri();
        }

        $data['beranda'] = 'Beranda';
        $data['kegiatan'] = 'Kegiatan';
        $data['tim'] = 'Tim';
        $data['galeri'] = 'Galeri';
        $data['my_profile'] = 'My Profile';
        $data['edit_profile'] = 'Edit Profile';
        $data['change_password'] = 'Change Password';
        $data['tentang'] = 'Tentang';
        $data['logout'] = 'Logout';
        $data['title'] = 'Administrator';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/galeri/index', $data);
        $this->load->view('templates/footer');
    }

    // tambah galeri 
    public function tambah_galeri(){
        // cek session untuk username
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        // cek session untuk email
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        //mengambil data dari session setelah login!
        $data['akun'] = $this->auth->get_data_byid($this->session->userdata('username'));
        // var_dump($data['akun']);
        // die;

        $this->form_validation->set_rules(
            'judul',
            'Judul',
            'required|trim',
            [
                'required' => 'Judul tidak boleh kosong!'
            ]
        );

        if($this->form_validation->run() == false){
            $data['beranda'] = 'Beranda';
            $data['kegiatan'] = 'Kegiatan';
            $data['tim'] = 'Tim';
            $data['galeri'] = 'Galeri';
            $data['my_profile'] = 'My Profile';
            $data['edit_profile'] = 'Edit Profile';
            $data['change_password'] = 'Change Password';
            $data['tentang'] = 'Tentang';
            $data['logout'] = 'Logout';
            $data['title'] = 'Administrator';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/galeri/tambah_galeri', $data);
            $this->load->view('templates/footer');
        }else{
            // upload gambar
            // cel jika ada gambar di upload atau tidak dari variable $_FILES
            $upload_image = $_FILES['gambar']['name'];
            // var_dump($upload_image);
            // die;

            if ($upload_image) {
                // file format yang boleh diupload
                $config['allowed_types'] = 'gif|jpg|png|jpeg|heic';

                // ukuran file yang boleh diupload lebh dari 5mb
                $config['max_size'] = '5120';

                // lokasi penyimpanan file
                $config['upload_path'] = './assets/img/galeri/';

                // resolusi gambar yang diupload
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                // load library upload  
                $this->load->library('upload', $config);

                // cek apakah file berhasil diupload
                if ($this->upload->do_upload('gambar')) {

                    // add gambar baru 
                    $new_image = $this->upload->data('file_name');
                } else {
                    // jika gagal
                    echo $this->upload->display_errors();
                }
            } 

            // data yang akan diinputkan ke database
            $this->galeri->insert_galeri($new_image);

            // flashdata
            $this->session->set_flashdata('flash', 'ditambahkan!');

            // redirect
            redirect('admin/galeri');
        
        }
    }

    // hapus galeri
    public function hapus_galeri($id){

        $data['galeri'] = $this->galeri->get_galeri_byid($id);

        // delete gambar 
        $old_image = $data['galeri']['gambar'];
        if ($old_image) {
            unlink(FCPATH . 'assets/img/galeri/' . $old_image);
        }

        $this->galeri->delete_galeri($id);
        redirect('admin/galeri');
    }


    public function edit_galeri($id)
    {
        // cek session untuk username
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        // cek session untuk email
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        //mengambil data dari session setelah login!
        $data['akun'] = $this->auth->get_data_byid($this->session->userdata('username'));
        // var_dump($data['akun']);
        // die;

        // get data galeri by id
        $data['galeri1'] = $this->galeri->get_galeri_byid($id);

        $this->form_validation->set_rules(
            'judul',
            'Judul',
            'required|trim',
            [
                'required' => 'Judul tidak boleh kosong!'
            ]
        );

        if ($this->form_validation->run() == false) {
            $data['beranda'] = 'Beranda';
            $data['kegiatan'] = 'Kegiatan';
            $data['tim'] = 'Tim';
            $data['galeri'] = 'Galeri';
            $data['my_profile'] = 'My Profile';
            $data['edit_profile'] = 'Edit Profile';
            $data['change_password'] = 'Change Password';
            $data['tentang'] = 'Tentang';
            $data['logout'] = 'Logout';
            $data['title'] = 'Administrator';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/galeri/edit_galeri', $data);
            $this->load->view('templates/footer');
        } else {
            // upload gambar
            // cel jika ada gambar di upload atau tidak dari variable $_FILES
            $upload_image = $_FILES['gambar']['name'];
            // var_dump($upload_image);
            // die;


            if ($upload_image) {
                // file format yang boleh diupload
                $config['allowed_types'] = 'gif|jpg|png|jpeg|heic';

                // ukuran file yang boleh diupload lebh dari 5mb
                $config['max_size'] = '5120';

                // lokasi penyimpanan file
                $config['upload_path'] = './assets/img/galeri/';

                // resolusi gambar yang diupload
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                // load library upload  
                $this->load->library('upload', $config);

                // cek apakah file berhasil diupload
                if($this->upload->do_upload('gambar')) {

                    // hapus gambar lama
                    $old_image = $data['galeri1']['gambar'];
                    if ($old_image) {
                        unlink(FCPATH . 'assets/img/galeri/' . $old_image);
                    }

                    // add gambar baru 
                    $new_image = $this->upload->data('file_name');
                } else {
                    // jika gagal
                    echo $this->upload->display_errors();
                }
            } else {
                // jika tidak ada gambar yang diupload
                $new_image = $data['galeri1']['gambar'];
            }

            // data yang akan diinputkan ke database
            $this->galeri->edit_galeri($id, $new_image);

            // flashdata
            $this->session->set_flashdata('flash', 'diubah!');

            // redirect
            redirect('admin/galeri');
        }
    }



    // tentang
    public function tentang(){
        // cek session untuk username
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        // cek session untuk email
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        //mengambil data dari session setelah login!
        $data['akun'] = $this->auth->get_data_byid($this->session->userdata('username'));
        // var_dump($data['akun']);
        // die;
        
        $data['beranda'] = 'Beranda';
        $data['kegiatan'] = 'Kegiatan';
        $data['tim'] = 'Tim';
        $data['galeri'] = 'Galeri';
        $data['my_profile'] = 'My Profile';
        $data['edit_profile'] = 'Edit Profile';
        $data['change_password'] = 'Change Password';
        $data['tentang'] = 'Tentang';
        $data['logout'] = 'Logout';
        $data['title'] = 'Administrator';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/tentang', $data);
        $this->load->view('templates/footer');
    }

}



?>