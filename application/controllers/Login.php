<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Login extends CI_Controller {
		public function __construct(){
			parent::__construct();
		}
		public function index(){
			if($this->session->userdata('masuk') == true){
				redirect(base_url('C'));
			}
			$this->load->view('login');
		}
		
		public function auth(){
			$username = $this->input->post('usercost',true);
			$password = $this->input->post('passcost',true);
			$cek_login = $this->mydb->auth_cost($username,$password);
			if($cek_login->num_rows()>0){
				$data = $cek_login->row_array();
				$this->session->set_userdata('masuk',true);
				$this->session->set_userdata('akses','1');
				$this->session->set_userdata('set_id',$data['username']);
				$this->session->set_userdata('set_name',$data['name']);
				redirect('C');
			}else{
				$url = base_url().'Login/index';
				echo $this->session->set_flashdata('msg','Username atau Password Salah!!!');
				redirect($url);
			}
			
		}
		
		public function logout(){
			$this->session->sess_destroy();
			redirect(base_url());
		}
	}