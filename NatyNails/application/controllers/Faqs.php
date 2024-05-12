<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faqs extends CI_Controller {
	
	public function index()
	{
		$this->load->helper(array('url', 'text', 'string'));
		$this->load->view('faqs');
	}
}
