<div class="navbar-header">
  <a class="navbar-brand" href="home.php">Babcock eBanking Project</a>
</div>

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
</button>

<ul class="nav navbar-nav navbar-left navbar-top-links">

</ul>

<ul class="nav navbar-right navbar-top-links">
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      <i class="fa fa-user fa-fw"></i> <?php echo $userDetails['user_name']; ?> <b class="caret"></b>
    </a>
    <ul class="dropdown-menu dropdown-user">
      <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
      </li>
      <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
      </li>
      <li class="divider"></li>
      <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
      </li>
    </ul>
  </li>
</ul>
<!-- /.navbar-top-links -->

<?php include  'partials/side-nav.php'; ?>