<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/product_model');

	}
	public function index()
	{
		$data['products'] = $this->product_model->getproducts();
		$data['categories'] = $this->product_model->getcategories();

		$this->load->view('store/products',$data);

	}
	public function p($slug='')
	{

		if($slug != '')
		{
			$data['product'] = $this->product_model->getproduct($slug);
			$data['categories'] = $this->product_model->getcategories();
			$this->load->view('store/product',$data);
		}
		else
		{
			redirect('products');
		}
	}

}
