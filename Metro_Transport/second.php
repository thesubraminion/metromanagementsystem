<?php
  session_start();
  $con=mysqli_connect("localhost","root","1111","Metro_Transport");
  $array=$_SESSION[''];
  $sql="select * from parking_slip where UID='$username'";
  $result=mysqli_query($con,$sql);
  $row=$result->fetch_assoc();
?>







<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Namma Metro</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">Welcome to Namma Metro!</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
          </li>
          
          <li>
            <a class="nav-link" href="https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Namma_Metro_Phase_1_line_map.png/800px-Namma_Metro_Phase_1_line_map.png">Route map</a>
          </li>
          
          
        </ul>
      </div>
    </div>
  </nav>

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('https://images.financialexpress.com/2016/01/metro-bangalore-6601.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Namma Metro</h3>
            <p>First metro in the world to have Rain Water Harvesting! This great initiative that was taken during the construction of the metro. This harvested water is used to recharge ground water.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url(https://www.thenewsminute.com/sites/default/files/styles/news_detail/public/namma%20metro%20PTI%20750X500.jpg?itok=nTd1dCfC)">
          <div class="carousel-caption d-none d-md-block">
            <h3>Namma Metro</h3>
            <p>Two major connecting lines are named as Purple Line and Green Line. The route from East to West Bengaluru is named as the Purple Line and the corridor between North and South as Green Line!</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/e/ef/Bangalore_Metro_Station%2C_India.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Namma Metro</h3>
            <p>The first part of underground trail of Purple Line began its operations on the 30th of April, 2016. It is said to be the first underground metro line in South India!</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <div class="container">
    <div class="col-md-3"></div>
      <div class="col-md-6">
        
  
      </div>
    </div>
  </div>
  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<div padding="40">
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">From</th>
        <th scope="col">To</th>
        <th scope="col">Train Id</th>
        
        <th scope="col">Arrival Time</th>
      </tr>
    </thead>
    <tbody>
      
      <tr>
        
        <td>Test</td>
        <td>Test</td>
        <td>Test</td>
        
        <td>Test</td>
      </tr>
    </tbody>
  </table>
</div>
</body>

</html>