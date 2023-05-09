<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
class C extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		if($this->session->userdata('masuk')!=true){
			redirect(base_url());
		}
	}

	public function index(){
		$data['tg'] = $this->mydb->total_tagihan();
		$data['pn'] = $this->mydb->total_pengeluaran();
		$data['ps'] = $this->mydb->per_semester();
        $this->load->view("header");
		$this->load->view("index",$data);
		$this->load->view("footer");
	}
	
	function tagihan(){
		$data['title'] = "Histori Tagihan";
		$data['tagihan'] = $this->mydb->v_tagihan()->result();
        $this->load->view("header",$data);
		$this->load->view("t_tagihan",$data);
		$this->load->view("footer");
	}
	function pembayaran(){
		$data['title'] = "Histori Pembayaran";
		$data['pembayaran'] = $this->mydb->v_pembayaran()->result();
        $this->load->view("header",$data);
		$this->load->view("t_pembayaran",$data);
		$this->load->view("footer");
	}
	function i_tag(){
		$data['title'] = "Tambah Tagihan";
        $this->load->view("header",$data);
		$this->load->view("i_tag");
		$this->load->view("footer");
	}
	function p_i_tagihan(){
		$nt = $this->input->post('nt');
		$sem = $this->input->post('sem');
		$tt= $this->input->post('tt');
		$data = array('nama_tag'=>$nt, 'sem'=>$sem, 'total'=>$tt, 'dibayar'=>'0');
		$this->mydb->input_dt($data,'t_tagihan');
		redirect('C/tagihan');
	}
	function i_pem(){
		$data['title'] = "Tambah Pembayaran";
        $this->load->view("header",$data);
		$this->load->view("i_pem");
		$this->load->view("footer");
	}
	function p_i_pem(){
		$nt = $this->input->post('nt');
		$tb= $this->input->post('tb');
		$tgl= $this->input->post('tgl');
		$data1 = $this->mydb->s_tagihan($nt)->result();
		foreach($data1 as $t){
			$bayar = $t->dibayar+$tb;
			$sisa = $t->total-$bayar;
			$where = array('no_tag' => $nt);
			$data2 = array('dibayar'=>$bayar);
			$data3 = array('no_tag'=>$nt, 'bayar'=>$tb, 'sisa'=>$sisa, 'tgl'=>$tgl);
			$this->mydb->update_dt($where,$data2,'t_tagihan');
			$this->mydb->input_dt($data3,'t_pembayaran');
		}
		redirect('C/pembayaran');
	}
}