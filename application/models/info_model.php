<?php

class info_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }
    public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data);
    }

    function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }
    function updateDatab($table,$data,$id)
    {
        $this->db->where('id',$id)->update($table,$data);
    }
    // function deleteData($where,$id)
    // {
    //     $this->db->delete($table,$id);
           
    // }
    function deleteData($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
    function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }
    function manualQuery($q)
    {
        return $this->db->query($q);
    }
    public function getAllDataInfo()
    {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('info');
        return $query->result();
    }
    function getDataInfoEdit($id){
        return $this->db->query("SELECT * from info where id = '$id' ")->result();
    }

    function getInfo(){
        $this->db->select("informasi");
        $this->db->get();
        return $query->result();
    }
    function GetInfodetail($id){
        return $this->db->query("SELECT * from info where id = '$id' ")->result();
    }

    function tampil_data(){
		return $this->db->get('info');
	}
    }
    
    
    ?>