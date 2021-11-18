<?php
class index extends CI_Controller{
    function __construct(){
        parent::__construct();
        
        $this->load->model('message_model');
       // $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
        
        $this->load->library('upload','validation');
    }

    function index(){
            $data=array(
            'title'=>'Data Komentar',
            'komen' =>$this->message_model->getAllDatacf(),
            
        );
        $this->load->view('/index',$data);
    }

 

    function tambah(){

        $data=array(
            //'id_cf'=>$this->session->userdata('id_cf'),
            'nama'=>$this->input->post('nama'),
            'email'=>$this->input->post('email'),
            'ket'=>$this->input->post('ket'),
        );
        $this->message_model->insertData('contact_form',$data);
        redirect("index ");
    }

    
//  **  ========================== Edit =======================
function edit($id = null){
    if (!isset($id)) redirect('index/index');
       
        $data = $this->message_model;
        $validation = $this->form_validation;
        $validation->set_rules($data->rules());

        if ($validation->run()) {
            $data->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["contact_form"] = $data->getById($id);
        if (!$data["contact_form"]) show_404();
    // $id=$this->input->post('id_cf');
    // $data=array(
    //     'nama'=>$this->input->post('nama'),
    //     'email'=>$this->input->post('email'),
    //     'ket'=>$this->input->post('ket'),
    // );

    // $this->message_model->updateData('contact_form',$data,$id);
    $this->load->view("index/index/editkomen", $data);
}


    //////HAPUS///////////
    function hapus(){
        $id['id_cf'] = $this->uri->segment(3);
        $this->message_model->deleteData('contact_form',$id);

        $this->session->set_flashdata('notif','Hapus Lokasi Berhasil');
        redirect("index");
    }
}