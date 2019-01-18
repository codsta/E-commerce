<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MY_Controller {

	public function __construct(Type $foo = null)
	{
		parent::__construct();
		$this->load->model('admin/product_model');
	}
	public function index()
	{
		$this->load->view('admin/products');
	}
	public function add_product($value='')
	{
		$result = $this->do_upload();
		$image_name;
		$error=[];
		if(array_key_exists('success',$result)){

				$image_name = $result['success']['file_name'];
		}
		else
			$error['product-image']= $result['error'];
		$rules = array(
				array(
					'field'=> 'product_title',
					'label'=> 'Product Title',
					'rules'=> 'required|min_length[10]|max_length[255]'
				),
				array(
					'field'=> 'description',
					'label'=>'Product description',
					'rules'=> 'required|min_length[10]|max_length[500]'
				),
				array(
					'field' => 'sizes[]',
					'label' => 'Size',
					'rules' => 'required'
				),
				array(
					'field' => 'price',
					'label' => 'Price',
					'rules' => 'required'
				),
				array(
					'field' => 'color',
					'label' => 'color ',
					'rules' => 'required'
				),
				array(
					'field' => 'product-category',
					'label' => 'product category',
					'rules' => 'required'
				)

		);

		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() && !array_key_exists('product-image',$error))
		{

			if($this->product_model->addproduct($image_name))
			{
				echo json_encode(array('success'=>'New product added successfully!'));
			}
			else
			{
				echo json_encode(array('error'=>'Something went wrong, please try again'));
			}
		}
		else
		{
			$errors = array_merge($this->form_validation->error_array(),$error);
			echo json_encode($errors);
		}
	}
	public function addproduct()
  {
		$data['categories'] = $this->product_model->getcategories();
		$data['colors'] = $this->product_model->getcolors();
		$this->load->view('admin/addproduct',$data);
  }
	public function do_upload()
	{
			 $config['upload_path']          = 	'./assets/product-images';
			 $config['allowed_types']        = 'gif|jpg|png|jpeg';
			 $config['max_size']             = 10000;
			 $config['max_width']            = 10000;
			 $config['max_height']           = 10000;

			 $this->load->library('upload', $config);

			 if ( ! $this->upload->do_upload('product-image'))
			 {
					return array('error' => $this->upload->display_errors());
			 }
			 else
			 {
					return array('success' => $this->upload->data());
			 }
	}
	public function getproducts()
	{
		return $this->product_model->getproducts();
	}
	public function getcategories()
	{
		return $this->product_model->getcategories();
	}
  public function deleteproduct($value='')
  {

  }
  public function deleteproducts($value='')
  {
    // code...
  }
  public function editproduct($value='')
  {
    // code...
  }

}
