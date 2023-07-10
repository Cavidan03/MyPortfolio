<?php
include 'connect.php';
$sql = $db->prepare("select *from settings,home,contact,section_control,about");
$sql->execute();
$x = $sql->fetch(PDO::FETCH_ASSOC);
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
    <?php echo $x['set_title'] ?>
  </title>
  <meta content="<?php echo $x['set_desc'] ?>" name="description">
  <meta content="<?php echo $x['set_keyworrds'] ?>" name="keywords">

  <!-- Favicons -->
  <link href="../admin/<?= $x['icon'] ?>" rel="icon">
  <link href="assets/img/1.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="assets/css/style1.css" media="screen">

  <!-- =======================================================
  * Template Name: Personal - v4.10.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">


      <h1><a href="index.php">
          <?= $x['home_name'] ?>
        </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>I'm a
        <?= $x['home_title'] ?>
      </h2>

      <nav id="navbar" class="navbar">
        <ul>
          <?php
          if ($x['home_section']) { ?>
            <li><a class="nav-link active" href="#header">Home</a></li>
            <?php
          }
          ?>
          <?php
          if ($x['about_section']) { ?>
            <li><a class="nav-link" href="#about">About</a></li>
          <?php } ?>
          <?php
          if ($x['resume_section']) { ?>
            <li><a class="nav-link" href="#resume">Resume</a></li>
          <?php } ?>
          <?php
          if ($x['galery_section']) { ?>
            <li><a class="nav-link" href="#galery">Galery</a></li>
          <?php } ?>
          <?php
          if ($x['portfolio_section']) { ?>
            <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <?php } ?>
          <?php
          if ($x['contact_section']) { ?>
            <li><a class="nav-link" href="#contact">Contact</a></li>
          <?php } ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <?php
        if ($x['facebook'] != '') { ?>
          <a href="<?php echo $x['facebook'] ?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <?php } ?>
        <?php
        if ($x['instagram'] != '') { ?>
          <a href="<?php echo $x['instagram'] ?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
        <?php } ?>
        <?php
        if ($x['linkedin'] != '') { ?>
          <a href="<?php echo $x['linkedin'] ?> " target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <?php } ?>
        <?php
        if ($x['twitter'] != '') { ?>
          <a href="<?php echo $x['twitter'] ?> " target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
        <?php } ?>
        <?php
        if ($x['github'] != '') { ?>
          <a href="<?php echo $x['github'] ?>" target="_blank" class="github"><i class="bi bi-github"></i></a>
        <?php } ?>
        <?php
        if ($x['skype'] != '') { ?>
          <a href="<?php echo $x['skype'] ?>" target="_blank" class="google-plus"><i class="bi bi-skype"></i></a>
        <?php } ?>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="../admin/<?= $x['profile_pic'] ?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>
            <?php echo $x['about_title'] ?>
          </h3>
          <p class="fst-italic">
            <?php echo $x['about_subtitle'] ?>
          </p>
          <div class="row col-lg-12">
            <div class="col-lg-12">
              <ul>

                <?php
                $sql1 = $db->prepare("select *from personal_info");
                $sql1->execute();
                while ($k = $sql1->fetch(PDO::FETCH_ASSOC)) { ?>

                  <li><i class="bi bi-chevron-right"></i> <strong>
                      <?= $k['personal_label'] ?>:
                    </strong> <span>
                      <?= $k['personal_value'] ?>
                    </span></li>
                <?php } ?>
              </ul>
            </div>


          </div>
          <p>
            <?php echo $x['about_desc'] ?>
          </p>
        </div>
      </div>

    </div><!-- End About Me -->




    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-12">

          <?php
          $sql3 = $db->prepare("select *from skills");
          $sql3->execute();
          while ($q = $sql3->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <div class="progress">
              <span class="skill">
                <?= $q['skils_name'] ?> <i class="val">
                  <?= $q['skils_level'] ?>%
                </i>
              </span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?= $q['skils_level'] ?>" aria-valuemin="0"
                  aria-valuemax="100">
                </div>
              </div>
            </div>
          <?php } ?>

        </div>


      </div>

    </div>

    </div><!-- End Skills -->

  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3> <strong> Education</strong></h3>
          <?php
          $sql4 = $db->prepare("select *from resume");
          $sql4->execute();
          while ($res = $sql4->fetch(PDO::FETCH_ASSOC)) {
            if ($res['types'] == 'e') {
              ?>
              <h3 class="resume-title"></h3>
              <div class="resume-item">
                <h4>
                  <?= $res['res_title'] ?>
                </h4>
                <h5>
                  <?= $res['res_time'] ?>
                </h5>
                <p><em>
                    <?= $res['res_location'] ?>
                  </em></p>
                <p>
                  <?= $res['res_subtitle'] ?>
                </p>
              </div>
            <?php }
          } ?>
        </div>
        <div class="col-lg-6">
          <h3> <strong>Professional Experience </strong></h3>
          <?php
          $sql4 = $db->prepare("select *from resume");
          $sql4->execute();
          while ($res = $sql4->fetch(PDO::FETCH_ASSOC)) {
            if ($res['types'] == 'p') {
              ?>

              <h3 class="resume-title"></h3>
              <div class="resume-item">
                <h4>
                  <?= $res['res_title'] ?>
                </h4>
                <h5>
                  <?= $res['res_time'] ?>
                </h5>
                <p><em>
                    <?= $res['res_location'] ?>
                  </em></p>
                <p>
                  <?= $res['res_subtitle'] ?>
                </p>
              </div>
            <?php }
          } ?>

        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <section id="galery" class="galery">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
        </div>
      </div>

      <div class="section-title">
        <h2>Galery</h2>
        <p>My Photos</p>
      </div>
      <div class="row galery-container">

        <?php

<<<<<<< HEAD
        $galery = $db->prepare("select * from galery");
        $galery->execute([]);
        while ($g = $galery->fetch(PDO::FETCH_ASSOC)) {

          ?>
          <div class="col-lg-4 col-md-6 galery-item filter-app">
            <div class="galery-wrap">
              <img src="../admin/<?= $g['galery_picture'] ?>" class="img-fluid" alt="">
              <div class="galery-info">
                <div class="galery-links">
                  <a href="../admin/<?= $g['galery_picture'] ?>" data-gallery="portfolioGallery"
                    class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
=======
$galery=$db->prepare("select * from galery");
$galery->execute([]);
while($g=$galery->fetch(PDO::FETCH_ASSOC)){

        ?>
        <div class="col-lg-4 col-md-6 galery-item filter-app">
          <div class="galery-wrap">
            <img src="../admin/<?=$g['galery_picture']?>" class="img-fluid" alt="">
            <div class="galery-info">
              <div class="galery-links">
                <a href="../admin/<?=$g['galery_picture']?>" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>
>>>>>>> 2db1f7a87884fe41f0e4deef847e12d30e8c9a2f
        <?php } ?>




      </div>
    </div>
  </section><!-- End Galery Section -->


  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
        </div>
      </div>

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>
      <div class="row portfolio-container">
        <?php
        $sql2 = $db->prepare("select*from portfolio");
        $sql2->execute();
        while ($p = $sql2->fetch(PDO::FETCH_ASSOC)) {
          ?>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="../admin/<?= $p['project_pic'] ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>
                  <?= $p['project_type'] ?>
                </h4>
                <p>
                  <?= $p['project_name'] ?>
                </p>
                <div class="portfolio-links">
                  <a href="<?= $p['project_link'] ?>" target="_blank"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>




      </div>
    </div>
  </section><!-- End Portfolio Section -->


  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>




      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>
              <?php echo $x['adress'] ?>
            </p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <?php
              if ($x['facebook'] != '') { ?>
                <a href="<?php echo $x['facebook'] ?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
              <?php } ?>
              <?php
              if ($x['instagram'] != '') {
                ?>
                <a href="<?php echo $x['instagram'] ?>" target="_blank" class="instagram"><i
                    class="bi bi-instagram"></i></a>
              <?php }
              if ($x['linkedin'] != '') { ?>
                <a href="<?php echo $x['linkedin'] ?> " target="_blank" class="linkedin"><i
                    class="bi bi-linkedin"></i></a>
              <?php }
              if ($x['twitter'] != '') { ?>
                <a href="<?php echo $x['twitter'] ?> " target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
              <?php }
              if ($x['github'] != '') { ?>
                <a href="<?php echo $x['github'] ?>" target="_blank" class="github"><i class="bi bi-github"></i></a>
              <?php }
              if ($x['skype'] != '') { ?>
                <a href="<?php echo $x['skype'] ?>" target="_blank" class="skype"><i class="bi bi-skype"></i></a>
              <?php } ?>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>
              <?php echo $x['email'] ?>
            </p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>
              <?php echo $x['mobile'] ?>
            </p>
          </div>
        </div>
      </div>
<<<<<<< HEAD

      <form action="" method="post" role="form" class="php-email-form mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
        </div>

        <div style="text-align: center;">
          <button name="submit" type="submit">Send Message</button>
        </div>
      </form>

      <?php
      require 'mail/Exception.php';
      require 'mail/PHPMailer.php';
      require 'mail/SMTP.php';

      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\SMTP;
      use PHPMailer\PHPMailer\Exception;

      if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $mail = new PHPMailer(true);

        try {
          $mail->isSMTP();
          $mail->Host = 'smtp.gmail.com';
          $mail->SMTPAuth = true;
          $mail->Username = 'nasirofjavidan@gmail.com';
          $mail->Password = 'eeddtahcqzhqbwty';
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
          $mail->Port = 587;

          $mail->setFrom($email, $name);
          $mail->addAddress('nasirofjavidan@gmail.com', 'Cavidan');

          $mail->Subject = $subject;
          $mail->Body = $message;

          $mail->send();
          echo "<script>alert('Your Message has ben  sent. Thank You!')</script>";
        } catch (Exception $e) {
          echo 'Error: ' . $mail->ErrorInfo;
        }
      }
      ?>


=======
    
      
>>>>>>> 2db1f7a87884fe41f0e4deef847e12d30e8c9a2f

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->

  </div>

  <!-- Vendor JS Files -->

  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<<<<<<< HEAD
=======
  <script src="assets/vendor/php-email-form/validate.js"></script>
>>>>>>> 2db1f7a87884fe41f0e4deef847e12d30e8c9a2f

  <!-- Template Main JS File -->
  <script src="assets/js/main1.js"></script>

</body>

</html>