<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	public function index()
	{
		$this->load->view('top');
		$this->load->view('content');
		$this->load->view('bottom');
	}
	public function entry()
	{
		$this->load->helper('form');
		$this->load->view('top');
		$this->load->view('form');
		$this->load->view('bottom');
	}
	public function contacts()
	{
		$this->load->view('top');
		$this->load->view('contacts');
		$this->load->view('bottom');
	}
	public function form_reg()
	{

		$this->load->helper('form');
		$this->load->view('top');
		$this->load->view('form_reg');
		$this->load->view('bottom');
	}
	public function signup() 
	{
		// $this->load->helper('form');
 		$this->load->library('form_validation');
		if ($this->form_validation->run() === FALSE) {
			$_POST['page']="signup failed";				// 1 авторизация трабл
			$this->load->view('form_status');
		}
		else {
		     //	-- Манипуляции с данными.
		     // $this->load->view('entry');
			$_POST['page']="signup success";				// 2 авторизация все гуд
			$this->load->view('form_status');
		}
	}
	public function reg_new()
	{
		$this->load->library('form_validation');
		if ($this->form_validation->run() === FALSE) {	//	Проверка содержания полей
			$_POST['page']="registration failed";			// 3 регистрация трабл
			$this->load->view('form_status');    //	Не верно введены данные -> вызываем страницу с ошибками
		} else {
			if ($query = $this->db->get_where('users', array('firstname' => $_POST['firstname']))->result_array())	//	Проверка на наличие дублей
			{
				echo "Такой логин уже используется!";
			} else {
				$data = array(
					'firstname' => $_POST['firstname'],
					'surname' => $_POST['surname'],
					'login' => $_POST['login'],
					'password' => $_POST['password'],
					'email' => $_POST['email'],
					'date_b' => $_POST['date_b'],
					'mobile' => $_POST['mobile']
					);			
					$_POST['page']="registration success";		// 4 регистрация гуд
					$this->load->view('form_status');	
				// echo '<H1 align="center">All right!</H1>'. "<pre>". "<br> POST:";
				// var_dump($_POST);
				// echo "<br>";
				// echo "DATA:<pre>";
				// var_dump($data);
				// echo "</pre>";
				// echo 'Вернитесь '. "<a href='./signup'>". 'jsdkjdsvn'. '</a>';
				// $this->db->insert('users', $data);  //	Добавляем пользователя в базу
				// redirect(site_url().'/main/entry');
			}
		}
	}
}


