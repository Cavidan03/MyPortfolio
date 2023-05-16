<?php
include 'connect.php';
$sql = $db->prepare("select *from admin");
$sql->execute();
$x = $sql->fetch(PDO::FETCH_ASSOC);
?>



<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">
      <?php echo $x['ad_logo'] ?>
    </span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src=" <?php echo $x['ad_pic'] ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          <?php echo $x['ad_name'] ?>
        </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item  ">
          <a href="section.php" class="nav-link">
          <i class="fa fa-th-large" aria-hidden="true"></i>
            <p>
                Section Control
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="home.php" class="nav-link">
          <i class="fa fa-home" aria-hidden="true"></i>
            <p>
            Home Settings
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="about.php" class="nav-link">
          <i class="fa fa-question-circle" aria-hidden="true"></i>
            <p>
             About Settings
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="resume.php" class="nav-link">
          <i class="fa fa-briefcase" aria-hidden="true"></i>
            <p>
             Resume Settings
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="portfolio.php" class="nav-link">
          <i class="fa fa-desktop" aria-hidden="true"></i>
            <p>
             Portfolio Settings
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="contact.php" class="nav-link">
          <i class="fa fa-phone" aria-hidden="true"></i>
            <p>
              Contact Settings
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="seo.php" class="nav-link">
          <i class="fa fa-search" aria-hidden="true"></i>
            <p>
             Seo Settings
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="account.php" class="nav-link">
          <i class="fa fa-user" aria-hidden="true"></i> 
            <p>
           Account Settings
            </p>
          </a>
        </li>
    
</ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>