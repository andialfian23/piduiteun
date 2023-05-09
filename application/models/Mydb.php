<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mydb extends CI_Model{
	function input_dt($data,$table){
		$this->db->insert($table,$data);
	}
	function update_dt($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function del($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	function v_tagihan(){
		return $this->db->query("select * from t_tagihan order by no_tag DESC");
	}
	function v_tag_bl(){
		return $this->db->query("select * from t_tagihan where total!=dibayar order by no_tag DESC");
	}
	function s_tagihan($no_tag){
		return $this->db->query("select * from t_tagihan where no_tag='".$no_tag."'");
	}
	
	function v_pembayaran(){
		return $this->db->query("select * from v_pembayaran order by tgl DESC");
	}
	function v_tgl(){
		return $this->db->query("SELECT * FROM `v_pembayaran` group by date_format(tgl,'%m') asc");
	}
	
	function total_tagihan(){
		return $this->db->query("select sum(total) as total,sum(dibayar) as dibayar from t_tagihan")->result();
	}
	function total_pengeluaran(){
		return $this->db->get("v_pengeluaran")->result();
	}
	function per_semester(){
		return $this->db->get("v_per_semester")->result();
	}
	function total_pn(){
		return $this->db->query("select count(tg) as tg from v_pengeluaran")->result();
	}
	
	function auth_cost($user,$pass){
		$query = $this->db->query("select * from login where username='".$user."' and password=sha1('".$pass."') LIMIT 1");
		return $query;
	}
}