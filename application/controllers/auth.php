<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class auth extends CI_Controller {

	function index()
	{
		$this->load->view('login');
	}

	function login()
	{
		redirect('dashboard');
	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */