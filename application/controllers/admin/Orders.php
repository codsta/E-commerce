<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Orders extends MY_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('admin/order_model');
  }
  public function index($value='')
  {
    $data['orders'] = $this->order_model->get_orders();
    $this->load->view('admin/orders',$data);
  }

}
