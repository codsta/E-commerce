<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Category_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  public function add_category($value='')
  {
    $data = array('category_title'=>$this->input->post('category_title'));
    return $this->db->insert('categories',$data);
  }
}
