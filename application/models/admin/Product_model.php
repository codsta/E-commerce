<?php

/**
 *
 */
class Product_model extends CI_model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  public function addproduct($image_name='')
  {
    // update image table
    $this->db->trans_start();
    $this->db->query('INSERT INTO `images`(`image_name`) VALUES(?)' , array($image_name) );
    $image_id = $this->db->insert_id();
    //  generate sku
    $cat =  $this->input->post('product-category');
    $color_id = $this->input->post('color');
    $prod_id = $this->getlastproductid();
    $store_name = 'Fashe';
    $SKU = $store_name.$cat.$color_id.$image_id.$prod_id++;
    $sizes = $this->input->post('sizes');
    // update products table with image id and sku from above
    $this->db->query('INSERT INTO `products`( `SKU`, `product_title`, `product_desc`, `product_price`, `image_id`,`slug`, `category_id`) VALUES(?,?,?,?,?,?,?)', array(
      $SKU, $this->input->post('product_title') , $this->input->post('description') , $this->input->post('price') , $image_id ,url_title( $this->input->post('product_title') ), $this->input->post('product-category')) );
    $product_id = $this->db->insert_id();
    // update product variation table
    foreach ($sizes as $s) {
      $this->db->query('INSERT INTO `product_variation`(`size`, `color_id`, `image_id`, `product_id`) VALUES (? , ? , ?, ?)', array(
        $s , $color_id , $image_id , $product_id
      ));
    }
    $this->db->trans_complete();

    return $this->db->trans_status();
  }
  public function getcategories($value='')
  {
    return $this->db->get('categories')->result();
  }
  public function getcolors($value='')
  {
    return $this->db->get('colors')->result();
  }
  public function getorders($value='')
  {
    return $this->db->get('orders')->result_array();
  }
  public function getorderby_custid($value='')
  {
    $cust_id;
    $this->db->where(array('custid'=>$cust_id));
    return $this->db->get('orders');
  }
  public function deleteproduct($id)
  {
  }
  public function getlastproductid($value='')
  {
    $query = $this->db->query("SELECT MAX(product_id) FROM `products`");
    $row = $query->row_array();
    return $row['MAX(product_id)'];
  }
  public function getproducts($value='')
  {
    $this->db->select('*');
    $this->db->from('products');
    $this->db->join('product_variation','products.product_id = product_variation.product_id');
    $this->db->join('categories','categories.category_id = products.category_id');
    $this->db->join('images','images.image_id = products.image_id');
    $this->db->join('colors','colors.color_id = product_variation.color_id')->group_by('products.product_id');
    return $this->db->get()->result();
  }
  public function getproduct($slug)
  {
    $this->db->select('*');
    $this->db->from('products');
    $this->db->join('product_variation','products.product_id = product_variation.product_id');
    $this->db->join('categories','categories.category_id = products.category_id');
    $this->db->join('images','images.image_id = products.image_id');
    $this->db->join('colors','colors.color_id = product_variation.color_id')->group_by('products.product_id');
    $this->db->where(array('products.slug'=>$slug));
    return $this->db->get()->result();
  }
}


 ?>
