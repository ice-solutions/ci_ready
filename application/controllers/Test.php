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

  function run_all() {
    $this->db->truncate('users');
    $this->create_user();
  }

  function create_user() {
    $user = array('username' => 'demo', 'password' => password_hash('password', PASSWORD_BCRYPT));
    $this->user_model->save($user);
  }

}
