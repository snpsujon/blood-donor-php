<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Save Poor - Charity Category Responsive Website Template | Causes : W3layouts</title>

    <link href="//fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <style>
        body{
             /* background: linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,.7));
                background-position: center;
            background-size: cover;
            height: 100vh;
            color: white;
            align-content: center;
            margin:0;
            padding:0;*/
        }

        table {
  border-collapse: collapse;
  width: 100%;

}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){
    background-color: #f2f2f2;
    color:black;
    }

th {
  background-color: #4CAF50;
  color: white;
}




    </style>
</head>
<body>

<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg stroke">
      <h1><a class="navbar-brand mr-lg-5" href="index.php">
        <img src="assets/images/logo.png" alt="Your logo" title="Your logo" />Alhamdulillah Foundation
        </a></h1>
      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.php">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
      <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav w-100">
          <li class="nav-item @@home__active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item @@bloodregform__active">
            <a class="nav-link" href="bloodregform.php">Register as a Blood Donor</a>
          </li>
          <li class="nav-item @@blodon__active">
            <a class="nav-link" href="blodonlist.php">Donor list</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="searchblood.php">Search Donor</a>
          </li>
          <li class="ml-lg-auto mr-lg-0 m-auto">
            <!--/search-right-->
            <div class="search-right">
              <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
              <!-- search popup -->
              <div id="search" class="pop-overlay">
                  <div class="popup">
                      <h4 class="mb-3">Search here</h4>
                      <form action="error.php" method="GET" class="search-box">
                          <input type="search" placeholder="Enter Keyword" name="search" required="required"
                              autofocus="">
                          <button type="submit" class="btn btn-style btn-primary">Search</button>
                      </form>

                  </div>
                  <a class="close" href="#close">×</a>
              </div>
              <!-- /search popup -->
          </div>
          <!--//search-right-->
          </li>
          <li class="align-self">
            <a href="#donate" class="btn btn-style btn-primary ml-lg-3 mr-lg-2"><span class="fa fa-heart mr-1"></span> Donate</a>
          </li>
        </ul>
      </div>
      <!-- toggle switch for light and dark theme -->
      <div class="mobile-position">
        <nav class="navigation">
          <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
              <input type="checkbox" id="checkbox">
              <div class="mode-container">
                <i class="gg-sun"></i>
                <i class="gg-moon"></i>
              </div>
            </label>
          </div>
        </nav>
      </div>
      <!-- //toggle switch for light and dark theme -->
    </nav>
  </div>
</header>
<!-- //header -->
<div class="inner-banner">
    <section class="w3l-breadcrumb py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Blood donor search form</h2>
        </div>
    </section>
</div>
<!-- banner bottom shape -->
<div class="position-relative">
    <div class="shape overflow-hidden">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- banner bottom shape -->
<br/>
<br/>


<center>
<form method="POST" style="text-align:center">

<br><br>
<h2 style="font-size:150%;"> Search By  Blood group:
</h2>
<br>
<input type="text" style="font-size:150%;" name="search_id"><br>
<br>
 <button class="button" ><b><big>Search</big></button>
  <br><br>
</form>

<article class="article">

  <table border="1" align="center">

  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "af";
$id="";
if(isset($_POST["search_id"])){
$id=$_POST["search_id"];
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM blooddonor WHERE bloodgroup='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row


  echo "<tr><th>Name</th><th>Father Name</th><th>Phone</th><th>Address</th><th>Blood Group</th><th>Blood Group</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
        echo "<td>" . $row["name"]. "</td>
        <td>" . $row["fathername"]. "</td>
        
        <td>" . $row["phone"]. "</td>
        <td>" . $row["address"]. "</td>
        <td>" .$row["bloodgroup"]."</td>
        <td> "."<a href='print.php?id=".$row["bloodgroup"]."'>Print</a>"."</td>";
  echo "</tr>";

    }

echo "</table>";
} else {
    echo "<h2><font color='black'>No Data Found </font></h2>";

}

mysqli_close($conn);
?>
</div>

</div>
<br>
<br>
<br>

</center>



<!-- footer 14 -->
<div class="w3l-footer-main">
  <div class="w3l-sub-footer-content">
      <section class="_form-3">
          <div class="form-main">
              <div class="container">
                  <div class="middle-section grid-column top-bottom">
                      <div class="image grid-three-column">
                          <img src="assets/images/subscribe.png" alt="" class="img-fluid radius-image-full">
                      </div>
                      <div class="text-grid grid-three-column">
                          <h2>Subscribe our Newsletter to receive latest updates from us</h2>
                          <p>We won’t give you spam mails.</p>
                      </div>
                      <div class="form-text grid-three-column">
                          <form action="/" method="GET">
                              <input type="email" name=" placeholder" placeholder="Enter Your Email" required="">
                              <button type="submit" class="btn btn-style btn-primary">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Footers-14 -->
      <footer class="footer-14">
          <div id="footers14-block">
              <div class="container">
                  <div class="footers20-content">
                      <div class="d-grid grid-col-4 grids-content">
                          <div class="column">
                              <h4>Our Address</h4>
                                <p>235 Terry, 10001 20C Trolley Square,
                                  DE 19806  U.S.A.</p>
                          </div>
                          <div class="column">
                              <h4>Call Us</h4>
                              <p>Mon - Fri 10:30 -18:00</p>
                              <p><a href="tel:+44-000-888-999">+44-000-888-999</a></p>
                          </div>
                          <div class="column">
                              <h4>Mail Us</h4>
                              <p><a href="mailto:info@example.com">info@example.com</a></p>
                              <p><a href="mailto:no.reply@example.com">no.reply@example.com</a></p>
                          </div>
                          <div class="column">
                              <h4>Follow Us On</h4>
                              <ul>
                                  <li><a href="#facebook"><span class="fa fa-facebook"
                                              aria-hidden="true"></span></a>
                                  </li>
                                  <li><a href="#linkedin"><span class="fa fa-linkedin"
                                              aria-hidden="true"></span></a>
                                  </li>
                                  <li><a href="#twitter"><span class="fa fa-twitter"
                                              aria-hidden="true"></span></a>
                                  </li>
                                  <li><a href="#google"><span class="fa fa-google-plus"
                                              aria-hidden="true"></span></a>
                                  </li>
                                  <li><a href="#github"><span class="fa fa-github" aria-hidden="true"></span></a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="footers14-bottom d-flex">
                      <div class="copyright">
                          <p>© 2020 Save Poor. All rights reserved. Design by <a href="https://w3layouts.com/"
                                  target="_blank">W3Layouts</a></p>
                      </div>
                      <div class="language-select d-flex">
                          <span class="fa fa-language" aria-hidden="true"></span>
                          <select>
                              <option>English</option>
                              <option>Estonina</option>
                              <option>Deutsch</option>
                              <option>Nederlan;ds</option>
                          </select>
                      </div>
                  </div>
              </div>
          </div>
          <!-- move top -->
          <button onclick="topFunction()" id="movetop" title="Go to top">
              &uarr;
          </button>
          <script>
              // When the user scrolls down 20px from the top of the document, show the button
              window.onscroll = function () {
                  scrollFunction()
              };

              function scrollFunction() {
                  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                      document.getElementById("movetop").style.display = "block";
                  } else {
                      document.getElementById("movetop").style.display = "none";
                  }
              }

              // When the user clicks on the button, scroll to the top of the document
              function topFunction() {
                  document.body.scrollTop = 0;
                  document.documentElement.scrollTop = 0;
              }
          </script>
          <!-- /move top -->

      </footer>
      <!-- Footers-14 -->
  </div>
</div>
<!-- //footer 14 -->

</body>
</html>

