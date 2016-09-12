<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		//header('Content-type:text/html;charset=utf-8');
	}
	public function regist()//默认下是index()
	{
		$this->load->view('regist');
	}
	public function login(){//login{
		$this->load->view('login');
	}
	public function user_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('user_model');
		$row = $this->user_model->get_by_name_pwd($username,$password);
		if($row){
			$this->load->view('success');
		}else{
			$this->load->view('login');
		}
	}
	
	public function save_user()
	{
		//echo $this->input->post('username');
		//save the data
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$sex = $this->input->post('sex');
		//访问数据库
		$this->load->model('user_model');
		$this->user_model->insert($username,$password,$sex);
	}
}
//1 接收数据  2 访问数据库   3跳转
//使用控制器的好处，view 和 controler分工清楚，不杂乱
