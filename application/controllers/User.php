<?php

class User extends CI_Controller {

  function __construct() {
    parent::__construct();
  }

  function dashboard() {
    $this->layout->view('user/dashboard');
  }

  function profile() {
    if ($this->input->post()) {
      $user = profile_form();
      profile_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->user_model->update($user, session('user_id'));
        $this->session->set_flashdata('message', 'Your profile has been updated successfully.');
        redirect('user/profile');
      }
    }
    $data['message'] = $this->session->flashdata('message');
    $data['user'] = $this->user_model->read(session('user_id'));
    $this->layout->view('user/profile', $data);
  }

}
