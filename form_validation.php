<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
	'main/log_in' => array(
					array(
				  		'field' => 'name',
				  		'label' => 'Имя пользователя',
				  		'rules' => 'required|trim|min_length[3]|max_length[25]'
						),
					array(
				  		'field' => 'password',
				  		'label' => 'Пароль',
				  		'rules' => 'required|trim|min_length[6]|max_length[16]'
				  		)
				),
	'main/reg_new' => array(
					array(
				  		'field' => 'firstname',
				  		'label' => 'Имя пользователя',
				  		'rules' => 'required|trim|min_length[3]'
						),
					array(
				  		'field' => 'surname',
				  		'label' => 'Фамилия пользователя',
				  		'rules' => 'required|trim'
						),
					array(
				  		'field' => 'login',
				  		'label' => 'Логин',
				  		'rules' => 'required|trim|min_length[3]|max_length[25]'
						),
					array(
				  		'field' => 'password',
				  		'label' => 'Пароль',
				  		'rules' => 'required|trim|min_length[6]|max_length[16]'
				  		),
					array(
				  		'field' => 'email',
				  		'label' => 'Почта',
				  		'rules' => 'required|trim'
						),
					array(
				  		'field' => 'date_b',
				  		'label' => 'День рождения',
				  		'rules' => 'required|trim'
						),
					array(
				  		'field' => 'mobile',
				  		'label' => 'Мобильный',
				  		'rules' => 'required|trim'
						),
					)
);

