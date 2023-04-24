<?php 

class Galeri_model extends CI_Model{

    // getall data galeri
    public function get_all_galeri(){
        return $this->db->get('galeri')->result_array();
    }

    // insert data galeri
    public function insert_galeri($new_image){
        date_default_timezone_set("Asia/Singapore");
        $data = [
            "judul" => $this->input->post('judul', true),
            "gambar" => $new_image,
            "date" =>  date('Y/m/d H:i:s')
        ];
        $this->db->insert('galeri', $data);
    }

    // delete data galeri
    public function delete_galeri($id){
        $this->db->delete('galeri', ['id' => $id]);
    }

    // selecting byid galeri
    public function get_galeri_byid($id){
        return $this->db->get_where('galeri', ['id' => $id])->row_array();
    }

    // edit galeri
    public function edit_galeri($id, $new_image){

        // value in form and update data to database!
        date_default_timezone_set("Asia/Singapore");
        $data = [
            "judul" => $this->input->post('judul', true),
            "gambar" => $new_image,
            "date" =>  date('Y/m/d H:i:s')
        ];

        // query update data
        $this->db->where('id', $id);
        $this->db->update('galeri', $data);
    }

    // searching data galeri
    public function search_galeri(){
        $keyword = $this->input->post('keyword_galeri', true);
        $this->db->like('judul', $keyword);
        // $this->db->or_like('deskripsi', $keyword);
        return $this->db->get('galeri')->result_array();
    }

    // count all data kategori
    public function countAllGaleri()
    {
        return $this->db->get('galeri')->num_rows();
    }
    


}

?>