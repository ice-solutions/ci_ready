<?php $this->load->view(get_theme() . '/_head'); ?>

<nav>
  <?php
  echo anchor(
    'user/dashboard',
    img(array('src' => 'public/themes/default/img/logo.png', 'class' => 'logo', 'height' => 42)),
    ''
  );
  ?>

  <ul>
    <li>
      <?php echo anchor('dashboard', '🏠 Home' . session('team_name'), ''); ?>
    </li>
    <li>
      <?php echo anchor('users', '👥 Users', ''); ?>
    </li>
  </ul>
  <ul>
    <li>
      <?php echo anchor('user/profile', '👤 ' . session('email'), 'id="profile"'); ?>
    </li>
    <li>
      <?php echo anchor('logout', '🚪 Log out', 'id="logout"'); ?>
    </li>
  </ul>

</nav>

<div class="container">

  <?php echo $content; ?>

</div>