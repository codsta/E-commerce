<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Order_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  public function get_orders($value='')
  {
    $this->db->select('`order_id`, orders.product_id,products.product_title, products.SKU , `customer_name`, `order_datetime` ');
    $this->db->from('products');
    $this->db->join('orders','products.product_id = orders.product_id','right');
    return $this->db->get()->result();
  }
}
