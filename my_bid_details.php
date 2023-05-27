<?php
session_start();
 include('database.php');
$ses=$_SESSION['name'];
?>


<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Auxion</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Auxion
            </span>
          </a>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="user_profile.php">Bidding<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contactu.php"> Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="my_bid.php">My Bidding</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- about section -->


  <div id="templatemo_left_content">

<h1>BIDDING DETAILS</h1>

<form id="form3" name="form3" method="post" action="">
  <table width="100%" border="0" cellspacing="5">
    <tr>
    <?php

$s=mysqli_query($con,"select * from bidding Where product_name='$id_name'");
while($row=mysqli_fetch_array($s))
{
?>  
<?php
}

?>
  </table>
</form>
<table width="90%" border="0">
  <tr>
  <td width="24%"><h4>Product Name</h4></td>
    <td width="24%"><h4>BEDDER NAME</h4></td>
    <td width="24%"><h4>BIDDING PRICE</h4></td>
    <td width="28%"><h4>E-MAIL</h4></td>
  </tr>
   <?php
include('database.php');
$s=mysqli_query($con,"select * from bidding where product_name='$id_name' ");
while($row=mysqli_fetch_array($s))
{
?>
    <tr>
     <td><?php echo $row['product_name']; ?></td>
    <td><?php echo $row['name']; ?></td>
     <td><?php echo $row['bid_price']; ?></td>
      <td><?php echo $row['email']; ?></td>
    </tr>
    <?php
$row++;
}
?>
</table>
<p>&nbsp;</p>
</div>




  <!-- end about section -->

  <div class="footer_bg">


<!-- info section -->
<section class="info_section layout_padding2">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="info_logo">
          <h3>
            Auxion
          </h3>
          <p>
            Auction software is application software, that can either be deployed on a desktop, on a web server or as a smart contract on a blockchain virtual machine.
          </p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="info_links">
          <h4>
            BASIC LINKS
          </h4>
          <ul class="  ">
            <li class=" ">
              <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="active">
              <a class="" href="admin.php"> Admin</a>
            </li>
            <li class="">
              <a class="" href="service.html"> Services </a>
            </li>
            <li class="">
              <a class="" href="contact.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="info_contact">
          <h4>
            CONTACT DETAILS
          </h4>
          <a href="">
            <div class="img-box">
              <img src="images/telephone-white.png" width="12px" alt="">
            </div>
            <p>
              +91 1234567890
            </p>
          </a>
          <a href="">
            <div class="img-box">
              <img src="images/envelope-white.png" width="18px" alt="">
            </div>
            <p>
              rohithpavan7@gmail.com
            </p>
          </a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="info_form ">
          <h4>
            NEWSLETTER
          </h4>
            <address>
            Write a mail for newsletter <a href="mailto:webmaster@example.com">rohithpavan7@gmail.com</a> 
            </address>

          <div class="social_box">
            <a href="">
              <img src="images/info-fb.png" alt="">
            </a>
            <a href="">
              <img src="images/info-twitter.png" alt="">
            </a>
            <a href="">
              <img src="images/info-linkedin.png" alt="">
            </a>
            <a href="">
              <img src="images/info-youtube.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end info_section -->


<!-- footer section -->
<section class="container-fluid footer_section">
  <div class="container1">
    <p><span id="displayYear"></span> All Rights Are Reserved</p>
  </div>
</section>
<!-- footer section -->

</div>


<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js"></script>


</body>
</html>

  