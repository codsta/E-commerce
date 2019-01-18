<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/category_model');

	}

	public function addcategory($value='')
	{
		$this->load->view('admin/addcategory');
	}
	public function add_category($value='')
  {
    $rules = array(
			array(
				'field'=> 'category_title',
				'label'=> 'Category Name',
				'rules'=> 'required|min_length[3]|max_length[50]'
			)
		);

		$this->form_validation->set_rules($rules);

		if($this->form_validation->run())
		{
			if($result = $this->category_model->add_category())
			{
				echo json_encode(array('success'=> ' New Category has been successfully added'));
			}
			else
			{
				echo json_array(array('error'=> $result ));
			}
		}
		else{
			echo json_encode($this->form_validation->error_array());
		}

  }
	
  public function editcategory($value='')
  {
    // code...
  }
  public function deletecategory($value='')
  {
    // code...
  }
  public function deletecategories($value='')
  {
    // code...
  }
}
