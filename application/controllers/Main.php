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
		// $tes=$this->db->get_where('users', 'logged=1')->row_array();
		// var_dump($tes);
		// if (isset($tes['firstname'])) {
			// echo "<br>ктото есть залогиненный<br>"; 
			// echo "<br>". anchor('main/log_out', 'Выйти');
		// } else {
		// 	echo "<br>Никого!<br>". anchor('main/log_out', 'Выйти');
		// }


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
	public function service()
	{
		$pers_data=$this->db->get_where('users','logged=1')->row_array();
		$this->load->view('top');
		$this->load->view('personal_page',$pers_data);
		$this->load->view('bottom');
	}
	public function form_reg()	//	Странница с формой регистрации
	{
		$this->load->helper('form');
		$this->load->view('top');
		$this->load->view('form_reg', array('error' => '' ));
		$this->load->view('bottom');
	}
	public function log_in()	//	Авторизация
	{
		// $this->load->helper('form');
		$auth_log = $this->db->get_where('users', array('login' => $_POST['name']))->result_array();
		$auth_pass = $this->db->get_where('users', array('password' => $_POST['password']))->result_array();
 		$this->load->library('form_validation');	// Подключаем библиотеку валидации


		$this->form_validation->set_rules('name','Имя пользователя','required|trim|min_length[3]|max_length[25]');
		$this->form_validation->set_rules('password','Пароль','required|trim|min_length[6]|max_length[16]');



		if ($this->form_validation->run() === FALSE) {	//	Проверка на корректность введенных данных
			$_POST['page']="signup failed";
			$this->load->view('form_status');	//	введено не верно->шлем
		}
		else {
			if ($auth_log && $auth_pass) {
				// echo 'Такой пользователь есть! Вы зашли под логином <b>'. $_POST['name']. '</b><br>';
				// var_dump($_POST);
				// echo anchor('main/log_out', 'Выйти');
				// echo '<br><br>'. anchor('main/entry', 'вернутся'). '<br><pre>';


			    	// -- Манипуляции с данными.
				$data_reg = array('logged' => TRUE);
				$this->db->where('login', $_POST['name']);
				$this->db->update('users', $data_reg);
				$_POST['page']="signup success";
				$this->load->view('form_status');
			} else {
				$_POST['page']="signup none";	//	несуществующая пара пароль-логин
				$this->load->view('form_status');
			}
		}
	}

	public function log_out()
	{
		$this->load->helper('form');
		$data_reg = array('logged' => FALSE);
		$this->db->where('logged', TRUE);
		$this->db->update('users', $data_reg);
		redirect('/main/entry/');
	}

	public function reg_new()	//	Регистрация
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->load->library('upload', $config);	//	Загрузка библиотеки и правил для файла
		
		$dublic = $query = $this->db->get_where('users', array('login' => $_POST['login']))->result_array();	// Проверка на наличие дублей по логину

		$this->form_validation->set_rules('firstname', 'Имя пользователя', 'required|trim|min_length[3]');
		$this->form_validation->set_rules('surname', 'Фамилия пользователя', 'required|trim');
		$this->form_validation->set_rules('login', 'Логин', 'required|trim|min_length[3]|max_length[25]');
		$this->form_validation->set_rules('password', 'Пароль', 'required|trim|min_length[6]|max_length[16]');
		$this->form_validation->set_rules('email', 'Почта', 'required|trim');
		$this->form_validation->set_rules('date_b', 'День рождения', 'required|trim');
		$this->form_validation->set_rules('mobile', 'Мобильный', 'required|trim');
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
				'logo' => $f_property['upload_data']['file_name']
				);					//	Обьявляем значения полей для добавления в БД
			$this->db->insert('users', $data);  //	Добавляем пользователя в базу
			$_POST['page']="registration success";
			$this->load->view('form_status', $f_property);			//	Выводим страницу об успешной рекистации
		}
	}
	public function del_user()
	{
		$this->db->delete('users','logged=1');
		$_POST['page']="delete success";
		$this->load->view('form_status');
	}
	public function upd_user()
	{
		$this->load->helper(array('form', 'url'));
		$cur_data=$this->db->get_where('users', 'logged=1')->row_array();
		$this->load->view('form_upd.php', $cur_data);
	}
	public function do_update()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';					//	Правила валидации файла
		$this->load->library('upload', $config);
		$error='';
		$cur_data=$this->db->get_where('users', 'logged=1')->row_array();
        $this->form_validation->set_rules('firstname', 'Имя пользователя', 'required|trim|min_length[4]');  
		$this->form_validation->set_rules('surname', 'Фамилия', 'required|min_length[4]');
		$this->form_validation->set_rules('login', 'Логин', 'required|min_length[4]');
		$this->form_validation->set_rules('password', 'Пароль', 'required|min_length[4]');
		$this->form_validation->set_rules('email', 'Электронный адрес', 'required');
		$this->form_validation->set_rules('date_b', 'День рождения', 'required|min_length[4]');
		$this->form_validation->set_rules('mobile', 'Мобильный номер', 'required|min_length[10]');	//	Правила для текстовых полей

		if ($this->form_validation->run() == FALSE)							
		{																	//	валидация текстовых полей не прошла!
			$this->load->view('form_upd',$cur_data);						
		} else {															//	Валидация текстовых полей успешна!


			$upd_data = array('firstname' => $_POST['firstname'],			//	Массив с обновленными данными
								'surname' => $_POST['surname'],
								'login' => $_POST['login'],
								'password' => $_POST['password'],
								'email' => $_POST['email'],
								'date_b' => $_POST['date_b'],
								'mobile' => $_POST['mobile']
								);		

			$file_u=$this->upload->do_upload('logo');
			$f_property = array('upload_data' => $this->upload->data());
			if ($f_property['upload_data']['file_name']){						//	Проверка "Загружаем ли файл?"
				if (! $file_u) {												//	Проверка загружаемого файла
					$error = array('error' => $this->upload->display_errors());		//	ошибки загрузки файла
					$cur_data=$this->db->get_where('users', 'logged=1')->row_array();
					$massiv['f_property'] = $f_property['upload_data'];
					$massiv['error'] = $error['error'];
					$massiv['cur_data'] = $cur_data;

					$this->load->view('form_upd',$massiv);

				} else {															//	Загрузка файла успешна
					$upd_data['logo'] = $f_property['upload_data']['file_name'];
				}
			}
			if (!$error) { 
				$this->db->where('logged', '1');
				$this->db->update('users', $upd_data);	// Забиваем в БД новые данные
				redirect('/main/service/');
			}
		}
	}











	public function cap()
	{

		$this->load->helper('captcha');
		// $vals = array(
		//     'word'	=> 'Random word',
		//     'img_path'	=> './captcha/',
		//     'img_url'	=> '',
		//     'font_path'	=> './path/to/fonts/texb.ttf',
		//     'img_width'	=> '150',
		//     'img_height' => 30,
		//     'expiration' => 7200
		//     );


		    $vals = array(
		        'word' => mt_rand(0, 9999),
		        'img_path' => 'captcha/',
		        'img_url' => base_url().'captcha/',
		        'font_path' => 'application/system/fonts/AntsyPants.ttf',
		        'img_width' => '200',
		        'img_height' => '60',
		        'expiration' => '7200'
    			);




		$cap = create_captcha($vals);
		echo $cap['image'];

		echo "<pre>";
		var_dump($vals);
		echo "</pre>";

		echo "<br><br><br>". anchor('/main/', 'Вернутся');
	}
}


//	captcha on registration page;			//	let's do it at first!

//	make correct auth; 
//	after registration send emailon a set address   (mailto, maybe);
//	crypted password;

// admin page & users groups (optional)