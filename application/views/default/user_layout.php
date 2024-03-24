
<?php $this->load->view(get_theme() . '/_head'); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <?php
  echo anchor(
    'user/dashboard',
    img(array('src' => 'public/themes/default/img/logo.png', 'class' => 'logo', 'height' => 42)),
    'class="navbar-brand"');
  ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <?php echo anchor('dashboard', '🏠 Home' . session('team_name'), 'class="nav-link"'); ?>
      </li>
      <li class="nav-item">
        <?php echo anchor('users', '👥 Users', 'class="nav-link"'); ?>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item">
        <?php echo anchor('user/profile', '👤 ' . session('email'), 'id="profile" class="nav-link"'); ?>
      </li>
      <li class="nav-item">
        <?php echo anchor('logout', '🚪 Log out', 'id="logout" class="nav-link"'); ?>
      </li>
    </ul>
  </div>
</nav>

<div class="container">

  <?php echo $content; ?>
</div>

<style>
  .container img {
    width: 128px;
  }

  nav a {
    margin-right: 10px;
  }
</style>
