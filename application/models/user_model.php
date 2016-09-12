<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class User_model extends CI_Model{
 	public function insert($username,$password,$sex){
 		$arr = array(
 			'username'=>$username,
			'password'=>$password,
			'sex'=>$sex
		);
 		$this->db->insert('user',$arr);
 	}
	public function get_by_name_pwd($username,$password){
		$arr = array(
			'username'=>$username,
			'password'=>$password
		);	
		$query = $this->db->get_where('user',$arr);
		//$query -> result();//查询的结果是一个结果集
		return $query->row();//only one,return a row
	}
 }
