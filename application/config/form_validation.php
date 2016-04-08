<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
	'main/signup' => array(
					array(
				  		'field' => 'name',
				  		'label' => 'Имя пользователя',
				  		'rules' => 'required|trim|min_length[3]|max_length[25]'
						),
					array(
				  		'field' => 'password',
				  		'label' => 'Пароль',
				  		'rules' => 'required|trim|min_length[6]|max_length[16]|md5'
				  		)
				),
	'main/reg_new' => array(
					array(
				  		'field' => 'firstname',
				  		'label' => 'Имя пользователя',
				  		'rules' => 'required|trim'
						),
					array(
				  		'field' => 'surname',
				  		'label' => 'Имя пользователя',
				  		'rules' => 'required|trim'
						),
					array(
				  		'field' => 'login',
				  		'label' => 'Имя пользователя',
				  		'rules' => 'required|trim|min_length[3]|max_length[25]'
						),
					array(
				  		'field' => 'password',
				  		'label' => 'Пароль',
				  		'rules' => 'required|trim|min_length[6]max_length[16]|md5'
				  		),
					array(
				  		'field' => 'email',
				  		'label' => 'Имя пользователя',
				  		'rules' => 'required|trim'
						),
					array(
				  		'field' => 'date_b',
				  		'label' => 'Имя пользователя',
				  		'rules' => 'required|trim'
						),
					array(
				  		'field' => 'mobile',
				  		'label' => 'Имя пользователя',
				  		'rules' => 'required|trim'
						),
					)
);





