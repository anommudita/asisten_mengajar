<?php 

class Team_model extends CI_Model{

    // getall data team
    public function get_all_team(){
        return $this->db->get('team')->result_array();
    }

    //insert data team
    public function insert_team($new_image){

        $data = [
            "nim" => $this->input->post('nim', true),
            "name" => $this->input->post('name', true),
            "prodi" => $this->input->post('prodi', true),
            "jabatan" => $this->input->post('jabatan', true),
            "keahlian" => $this->input->post('keahlian',true),
            "sosmed" => $this->input->post('sosmed', true),
            "guru_pamong" => $this->input->post('guru_pamong', true),
            "gambar" => $new_image

        ];
        $this->db->insert('team', $data);
    }


    // delete data team
    public function delete_team($id){
        $this->db->delete('team', ['id' => $id]);
    }


    // selecting byid team
    public function get_team_byid($id){
        return $this->db->get_where('team', ['id' => $id])->row_array();
    }

    // edit team
    public function edit_team($id, $new_image){

        // value in form and update data to database!
        $data = [
            "nim" => $this->input->post('nim', true),
            "name" => $this->input->post('name', true),
            "prodi" => $this->input->post('prodi', true),
            "jabatan" => $this->input->post('jabatan', true),
            "keahlian" => $this->input->post('keahlian', true),
            "sosmed" => $this->input->post('sosmed', true),
            "guru_pamong" => $this->input->post('guru_pamong', true),
            "gambar" => $new_image
        ];

        // query update data
        $this->db->where('id', $id);
        $this->db->update('team', $data);
    }

    // searching data kategori
    public function search_team(){
        $keyword = $this->input->post('keyword_team', true);
        $this->db->like('name', $keyword);
        // $this->db->or_like('deskripsi', $keyword);
        return $this->db->get('team')->result_array();
    }

    // pagination data kategori
    public function get_all_team_pagination($limit, $start, $keyword = null ){

        if($keyword!=null){
            $this->db->like('name', $keyword);
            // $this->db->or_like('deskripsi', $keyword);
        }
        return $this->db->get('team', $limit, $start)->result_array();
    }

    // count all data team
    public function countAllTeam(){
        return $this->db->get('team')->num_rows();
    }

}

?>