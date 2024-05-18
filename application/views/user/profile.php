<h3>Edit user</h3>
<?php if ($message): ?>
  <div id="message" class="alert alert-info">
    <?php echo $message; ?>
  </div>
<?php endif; ?>
<?php echo form_open('user/profile'); ?>
<p>Email<br>
  <?php echo form_input('email', $user->email, 'id="email" class="form-control"'); ?>
  <?php echo form_error('email'); ?>
</p>
<p>Password<br>
  <?php echo form_password('password', '', 'id="password" class="form-control"'); ?>
  <?php echo form_error('password'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Update profile', 'id="update" class="btn btn-success"'); ?>
</p>
<?php echo form_close(); ?>
