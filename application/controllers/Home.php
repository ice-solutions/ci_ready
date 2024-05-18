<?php

class Home extends CI_Controller {

  var $user_model;

  var $input;
  var $form_validation;
  var $session;

  function __construct() {
    parent::__construct();
    $this->load->model('user_model');
  }

  function register() {
    $data['message'] = '';
    if ($this->input->post()) {
      $user = register_form();
      register_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->user_model->save($user);
        session_flashdata('info', 'Registration successful. You can now log in.');
        redirect('login');
      }
    }
    $this->load->view(get_theme() . '/home/register', $data);
  }

  function login() {
    if ($this->input->post()) {
      list($username, $password) = login_form();
      $user = $this->user_model->read_by_username_and_password($username, $password);
      if ($user) {
        session('user_id', $user->id);
        session('email', $user->email);
        redirect('dashboard');
      } else {
        session_flashdata('warning', 'Invalid username or password. Please try again!');
      }
    }
    $data['info'] = session_flashdata('info');
    $data['warning'] = session_flashdata('warning');
    $this->load->view(get_theme() . '/home/login', $data);
  }

  function logout() {
    $this->session->sess_destroy();
    redirect('login');
  }

}
