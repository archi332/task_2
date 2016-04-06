<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('top');
		$this->load->view('content');
		$this->load->view('bottom');
	}
	public function entry()
	{
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
		$this->load->view('top');
		$this->load->view('form_reg');
		$this->load->view('bottom');
	}
}
