<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		$this->load->view('admin/home');
	}
  public function login($value='')
  {
		$this->load->view('admin/login');
  }
  public function register($value='')
  {
		$this->load->view('admin/register');
  }

}
