<?php 

class Auth_model extends CI_Model{

    // registrasi user baru
    public function registrasi(){
        date_default_timezone_set("Asia/Singapore");
        $data = [
            "name" => $this->input->post('name', true),
            "username" => $this->input->post('username', true),
            "email" => $this->input->post('email', true),
            "password" => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            "gambar" => 'logoundiksha.png',
            "date" =>  date('Y/m/d H:i:s')
        ];
        $this->db->insert('akun', $data);
    }

    public function get_data_byid($username){
        return $this->db->get_where('akun', ['username' => $username])->row_array();
    }

    // edit profile admin
    public function editprofileadmin($new_image){

        $data = [
            "name" => $this->input->post('name', true),
            "gambar" => $new_image
        ];

        // update data
        $this->db->update('akun', $data);
    }


    // update password
    public function updatepassword($password){
        $data = [
            "password" => $password
        ];
        
        // update data
        $this->db->update('akun', $data);
    }

}
