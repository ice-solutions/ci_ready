<?php

class Setup extends CI_Controller {

  function __construct() {
    parent::__construct();
  }

  function unattended() {
    echo '<div id="message">OK</div>';
  }

  function clear_users() {
    $this->db->truncate('users');

    echo '<div id="message">OK</div>';
  }
}
