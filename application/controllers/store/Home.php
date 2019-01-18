<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct(Type $foo = null)
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('store/home');
	}
	public function products($value='')
	{
		$this->load->view('store/products');
	}
}
