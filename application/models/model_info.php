<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_info extends CI_Model {

    public function create(){
        $data = array('id_info' => $this->input->post('id_info'),
            'gambar'=>$this->input->post('gambar'),
            'judul'=>$this->input->post('judul'),
            'isi'=>$this->input->post('isi'),
            'tanggal'=>$this->input->post('tanggal'));
        $query = $this->db->insert('info', $data);
        return $query;
    }
    public function getAll(){
        $query = $this->db->get('info');
        return $query;
    }
    public function getbyinfo($id){
        $this->db->where('id_info', $id);
        $query = $this->db->get('info');
        return $query;
    }
    public function read($id){
        $this->db->where('id_info', $id);
        $query = $this->db->get('info');
        return $query;
    }
    public function update(){
        $data = array('id_info'=>$this->input->post('id_info'),

            'gambar'=>$this->input->post('gambar'),
            'judul'=>$this->input->post('judul'),
            'isi'=>$this->input->post('isi'),
            'tanggal'=>$this->input->post('tanggal'));
        $this->db->where('id_info', $this->input->post('id_info'));
        $query = $this->db->update('info', $data);
        return $query;
    }
    public function delete(){
        $this->db->where('id_info', $this->input->post('id_info'));
        $query = $this->db->delete('info');
        return $query;
    }
    public function deletebyidinfo($id){
        $this->db->where('id_inof', $id);
        $query = $this->db->delete('info');
        return $query;
    }

}
