<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	public function index()
	{
		$this->load->view('top');
		$this->load->view('content');
		$this->load->view('bottom');
	}
	public function entry()	//	Странница с формой авторизации
	{
		$tes=$this->db->get_where('users', 'logged=1')->result_array();
		var_dump($tes);
		if (isset($tes[0]['firstname'])) {

			echo "<br>ктото есть залогиненный<br>"; 


			echo "<br>". anchor('main/log_out', 'Выйти');
		} else {
			echo "<br>Никого!<br>". anchor('main/log_out', 'Выйти');
		}


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
	public function form_reg()	//	Странница с формой регистрации
	{

		$this->load->helper('form');
		$this->load->view('top');
		$this->load->view('form_reg', array('error' => '' ));
		$this->load->view('bottom');
	}
	public function signup()	//	Авторизация
	{
		// $this->load->helper('form');
		$auth_log = $this->db->get_where('users', array('login' => $_POST['name']))->result_array();
		$auth_pass = $this->db->get_where('users', array('password' => $_POST['password']))->result_array();
 		$this->load->library('form_validation');	// Подключаем библиотеку валидации
		if ($this->form_validation->run() === FALSE) {	//	Проверка на корректность введенных данных
			$_POST['page']="signup failed";
			$this->load->view('form_status');
		}
		else {
			if ($auth_log && $auth_pass) {
				echo 'Такой пользователь есть! Вы зашли под логином <b>'. $_POST['name']. '</b><br>';
				var_dump($_POST);
				echo anchor('main/log_out', 'Выйти');
				echo '<br><br>'. anchor('main/entry', 'вернутся'). '<br><pre>';
				$data_reg = array('logged' => TRUE);
				$this->db->where('login', $_POST['name']);
				$this->db->update('users', $data_reg);
			} else {
				echo "Пользователя с такой парой '/логин - пароль'/ не существует!<br>";
				var_dump($_POST);
				echo '<br><br>'. anchor('main/entry', 'вернутся');
			    //	-- Манипуляции с данными.
			    // $this->load->view('entry');
				// $_POST['page']="signup success";
				// $this->load->view('form_status');
			}
		}
	}

public function log_out()
{
					$data_reg = array('logged' => FALSE);
				$this->db->where('logged', TRUE);
				$this->db->update('users', $data_reg);
		echo '<br><br>'. anchor('main/entry', 'вернутся');
}

	public function reg_new()	//	Регистрация
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation', 'upload'));
		$dublic = $query = $this->db->get_where('users', array('login' => $_POST['login']))->result_array(); // Проверка на наличие дублей по логину
		$form_v = $this->form_validation->run();	// Валидация формы (/config/form_validation.php)
		$file_u = $this->upload->do_upload('logo');	// Проверка загружаемого файла (/config/upload.php)
		// $error = '';
		if ( $form_v === FALSE || $dublic || ! $file_u ) {	//	Проверка содержания полей || дубликатов
			if ($dublic)
			{
				$_POST ['dublicate'] = '';	//	Сообщаем о дубле логина
			}
			if ( ! $file_u)
			{
				$error = array('error' => $this->upload->display_errors());	
					// var_dump($data);
			}
			$_POST['page'] = "registration failed";	// Сообщаем об ошиках заполнения форм
			
			$this->load->view('form_status', $error);    //	Не верно введены данные -> вызываем страницу с ошибками
		} else {
			$f_property = array('upload_data' => $this->upload->data());
			$data = array(
				'firstname' => $_POST['firstname'],
				'surname' => $_POST['surname'],
				'login' => $_POST['login'],
				'password' => $_POST['password'],
				'email' => $_POST['email'],
				'date_b' => $_POST['date_b'],
				'mobile' => $_POST['mobile'],
				'logo' => $f_property['upload_data']['full_path']
				);					//	Обьявляем значения полей для добавления в БД
			$this->db->insert('users', $data);  //	Добавляем пользователя в базу
			$_POST['page']="registration success";
			$this->load->view('form_status', $f_property);			//	Выводим страницу об успешной рекистации
		}
	}
}


