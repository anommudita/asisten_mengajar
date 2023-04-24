<?php 

class Dosen_gp_model extends CI_Model{

    // getall data dosen dan guru pamong
    public function get_all_dosen_gp(){
        return $this->db->get('dosen_gp')->result_array();
    }

    // insert data dosen dan guru pamong
    public function insert_dosen_gp(){
        $data = [
            "nip" => $this->input->post('nip', true),
            "nama" => $this->input->post('nama', true),
            "sebagai" => $this->input->post('sebagai', true),
        ];
        $this->db->insert('dosen_gp', $data);
    }

    // delete data dosen dan guru pamong
    public function delete_dosen_gp($id){
        $this->db->delete('dosen_gp', ['id' => $id]);
    }

    // selecting byid dosen dan guru pamong
    public function get_dosen_gp_byid($id){
        return $this->db->get_where('dosen_gp', ['id' => $id])->row_array();
    }

    // edit dosen dan guru pamong
    public function edit_dosen_gp($id){

        // value in form and update data to database!
        $data = [
            "nip" => $this->input->post('nip', true),
            "nama" => $this->input->post('nama', true),
            "sebagai" => $this->input->post('sebagai', true),
        ];

        // query update data
        $this->db->where('id', $id);
        $this->db->update('dosen_gp', $data);
    }

    // searching data dosen dan guru pamong
    public function search_dosen_gp(){
        $keyword = $this->input->post('keyword_dosen_gp', true);
        $this->db->like('nip', $keyword);
        $this->db->or_like('nama', $keyword);
        $this->db->or_like('sebagai', $keyword);
        return $this->db->get('dosen_gp')->result_array();
    }

    // pagination data dosen dan guru pamong
    public function get_all_dosen_gp_pagination($limit , $start , $keyword = null ){

        if($keyword!=null){
            $this->db->like('nip', $keyword);
            $this->db->or_like('nama', $keyword);
            $this->db->or_like('sebagai', $keyword);
        }
        return $this->db->get('dosen_gp', $limit, $start)->result_array();
    }

    // count all data dosen dan guru pamong
    public function countAll_dosen_gp(){
        return $this->db->get('dosen_gp')->num_rows();
    }

}

?>