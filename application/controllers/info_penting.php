
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class info_penting extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('info_model');
                $this->load->helper('url');
	}
 
	function index(){
		$data['info'] = $this->info_model->tampil_data()->result();
		$this->load->view('info_penting',$data);
	}
	
	

	public function detail()
	{
		$id=$this->input->get('id');
		$data['info'] = $this->info_model->GetInfodetail($id);
		$this->load->view('detail_info', $data);
	
	}
}

