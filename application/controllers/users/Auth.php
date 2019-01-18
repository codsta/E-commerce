<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->add_package_path(APPPATH.'third_party/ion_auth/');
    $this->load->library('ion_auth');
  }
  public function create_user($value='')
  {
    $username = 'benedmunds';
    $password = '12345678';
    $email = 'ben.edmunds@gmail.com';
    $group = array('1'); // Sets user to admin.

    $this->ion_auth->register($username, $password, $email, $group);

  }

  public function login($value='')
  {
    $identity = 'ben.edmunds@gmail.com';
    $password = '12345678';
    $remember = TRUE; // remember the user
    if($this->ion_auth->login($identity, $password, $remember)){
      redirect('admin/home');
    }
  }

}

 ?>
