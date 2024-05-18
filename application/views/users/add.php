<h3>Add user</h3>
<?php echo form_open('users/add'); ?>
<p>Email<br>
  <?php echo form_input('email', $this->input->post('email'), 'class="form-control"'); ?>
  <?php echo form_error('email'); ?>
</p>
<p>Password<br>
  <?php echo form_password('password', '', 'class="form-control"'); ?>
  <?php echo form_error('password'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Update user', 'class="btn btn-success"'); ?>
  or <?php echo anchor('users', 'cancel'); ?>
</p>
<?php echo form_close(); ?>
