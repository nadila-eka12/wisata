<?php
class data_info extends CI_Controller{
    function __construct(){
        parent::__construct();
        
        $this->load->model('info_model');
       // $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
        
        $this->load->library('upload');
    }

    function index(){
            $data=array(
            'title'=>'Data Info',
            'data_info' =>$this->info_model->getAllDatainfo(),
            
        );
        $this->load->view('haladmin/info',$data);
    }

    function editinfo(){
        $data["dt_info"]=$this->info_model->getDataInfoEdit($_POST['info_id']);
        echo $this->load->view('haladmin/editinfo',$data,true);
    } 



//    ===================== INSERT =====================
    function tambah(){

        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']   = '10000';
        $config['max_width']  = '20000';
        $config['max_height']  = '20000';
                
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('gambar')){
                $gambar="";
        }else{
                $gambar=$this->upload->file_name;
        } 

        $data=array(
            'gambar'=>$gambar,
            'judul'=>$this->input->post('judul'),
            'isi'=>$this->input->post('isi'),
            'tanggal'=>$this->input->post('tanggal'),
        );
        $this->info_model->insertData('info',$data);
        $this->session->set_flashdata('notif','Tambah Info Berhasil');
        redirect("data_info");
    }

    function simpaninfo(){
          $id=$this->input->post('id_info');
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']   = '10000';
        $config['max_width']  = '20000';
        $config['max_height']  = '20000';
       
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('gambar')){
                $gambar="";
        }else{
                $gambar=$this->upload->file_name;
        }

        $data=array(
            'gambar'=>$gambar,
            'judul'=>$this->input->post('judul'),
            'isi'=>$this->input->post('isi'),
            'tanggal'=>$this->input->post('tanggal'),
        );
        $this->info_model->updateDatab('info',$data, $id);
        $this->session->set_flashdata('notif','Edit info Berhasil');
        redirect("data_info");
    }

//  **  ========================== Edit =======================
    function edit(){
        $id=$this->input->post('id_info');
        $data=array(
            'judul'=>$this->input->post('judul'),
            'isi'=>$this->input->post('isi'),
            'tanggal'=>$this->input->post('tanggal'),

        );

        $this->info_model->updateData('info',$data,$id);
        redirect("data_info");
    }




//    ========================== DELETE =======================
function hapus($id){
    $where = array('id' => $id);
    $this->info_model->deleteData($where,'info');
    redirect('data_info');
}
    // function hapus(){
    //     $id['id_info'] = $this->uri->segment(3);
    //     $this->info_model->deleteData('info',$id);

    //     $this->session->set_flashdata('notif','Hapus Info Berhasil');
    //     redirect("data_info");
    // }
}