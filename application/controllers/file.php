<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File extends CI_Controller {
	
	public function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->view('try_form_upload', array('error' => '' ));
	}

	public function do_upload()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('upload');
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('try_form_upload', $error);
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('upload_success');
		}
	}	
}


