<?php 

class Kegiatan_model extends CI_Model{

    // getall data kategori
    public function get_all_kegiatan(){
        return $this->db->get('kegiatan')->result_array();
    }

    // insert data kategori
    public function insert_kegiatan($new_image1, $new_image2){
        date_default_timezone_set("Asia/Singapore");
        $data = [
            "nama_kegiatan" => $this->input->post('nama_kegiatan', true),
            "content" => $this->input->post('content', true),
            "kategori" => $this->input->post('kategori', true),
            "gambar1" => $new_image1,
            "gambar2" => $new_image2,
            "date" =>  date('Y/m/d H:i:s')

        ];
        $this->db->insert('kegiatan', $data);
    }

    // delete data kegiatan
    public function delete_kegiatan($id){
        $this->db->delete('kegiatan', ['id' => $id]);
    }


    // selecting byid kegiatan
    public function get_kegiatan_byid($id){
        return $this->db->get_where('kegiatan', ['id' => $id])->row_array();
    }

    // edit kategori
    public function edit_kegiatan($id, $new_image1, $new_image2){

        // value in form and update data to database!
        date_default_timezone_set("Asia/Singapore");
        $data = [
            "nama_kegiatan" => $this->input->post('nama_kegiatan', true),
            "content" => $this->input->post('content', true),
            "kategori" => $this->input->post('kategori', true),
            "gambar1" => $new_image1,
            "gambar2" => $new_image2,
            "date" =>  date('Y/m/d H:i:s')
        ];

        // query update data
        $this->db->where('id', $id);
        $this->db->update('kegiatan', $data);
    }

    // searching data kategori
    public function search_kegiatan(){
        $keyword = $this->input->post('keyword_kegiatan', true);
        $this->db->like('nama_kegiatan', $keyword);
        // $this->db->or_like('deskripsi', $keyword);
        return $this->db->get('kegiatan')->result_array();
    }


    // count all data kegiatan
    public function countAllKegiatan()
    {
        return $this->db->get('kegiatan')->num_rows();
    }


}

?>