<?php

class Test extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('user_model');
  }

  function hello() {
    $data['message'] = 'Hello, friend!';
    $this->load->view('test/hello', $data);
  }

}
