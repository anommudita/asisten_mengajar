<?php 

class Kategori_model extends CI_Model{

    // getall data kategori
    public function get_all_category(){
        return $this->db->get('kategori')->result_array();
    }

    // insert data kategori
    public function insert_category(){
        $data = [
            "name" => $this->input->post('nama_kategori', true),
            "deskripsi" => $this->input->post('deskripsi', true)
        ];
        $this->db->insert('kategori', $data);
    }

    // delete data kategori
    public function delete_category($id){
        $this->db->delete('kategori', ['id' => $id]);
    }


    // selecting byid kategori
    public function get_category_byid($id){
        return $this->db->get_where('kategori', ['id' => $id])->row_array();
    }

    // edit kategori
    public function edit_category($id){

        // value in form and update data to database!
        $data = [
            "name" => $this->input->post('nama_kategori', true),
            "deskripsi" => $this->input->post('deskripsi', true)
        ];

        // query update data
        $this->db->where('id', $id);
        $this->db->update('kategori', $data);
    }

    // searching data kategori
    public function search_category(){
        $keyword = $this->input->post('keyword_category', true);
        $this->db->like('name', $keyword);
        $this->db->or_like('deskripsi', $keyword);
        return $this->db->get('kategori')->result_array();
    }

    // pagination data kategori
    public function get_all_category_pagination($limit, $start, $keyword = null ){

        if($keyword!=null){
            $this->db->like('name', $keyword);
            $this->db->or_like('deskripsi', $keyword);
        }
        return $this->db->get('kategori', $limit, $start)->result_array();
    }

    // count all data kategori
    public function countAllCategory(){
        return $this->db->get('kategori')->num_rows();
    }

}

?>