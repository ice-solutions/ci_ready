<?php $this->load->view(get_theme() . '/_head'); ?>

<div class="register">
  <img src="public/themes/default/img/logo.png">
    <h3>Register</h3>
  <?php echo form_open('register'); ?>
  <p>Email<br>
    <?php echo form_input('email', $this->input->post('email'), 'id="email" class="form-control"'); ?>
    <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>
  </p>
  <p>Password<br>
    <?php echo form_password('password', '', 'id="password" class="form-control"'); ?>
    <?php echo form_error('password', '<small class="text-danger">', '</small>'); ?>
  </p>
  <p>Confirm password<br>
    <?php echo form_password('confirm_password', '', 'id="confirm_password" class="form-control"'); ?>
    <?php echo form_error('confirm_password', '<small class="text-danger">', '</small>'); ?>
  </p>
  <p>
    <?php echo form_submit('submit', 'Register', 'id="register" class="btn btn-success"'); ?>
  </p>
  <p>
    Already have an account? <?php echo anchor('login', 'Log in', 'id="login"'); ?>
  </p>
  <?php echo form_close(); ?>
</div>

<style>
  .register {
    width: 300px;
    margin: auto;
  }
  .register img {
    width: 128px;
  }
</style>
