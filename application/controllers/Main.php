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
			$this->load->view('formfailed');
		}
		else {
		     //	-- Манипуляции с данными.
		     // $this->load->view('entry');
			$this->load->view('formsuccess');
		}
	}
	public function reg_new()
	{
		$this->load->library('form_validation');
		if ($this->form_validation->run() === FALSE) {	//	Проверка содержания полей
			$this->load->view('formfailed');    //	Не верно введены данные -> вызываем страницу с ошибками

		} else {
			echo '<H1 align="center">All right!<H1>';
		}



	}
}
