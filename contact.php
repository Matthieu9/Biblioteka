<!DOCTYPE html>
<html>

<head>
  <title>฿IBLIOTECHA - Contacts</title>

  <style type="text/css">
    header {
      background-image: url("include/reseau_sociaux.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
    }
    #search {
      visibility: hidden;
    }
    .staff{
      color: red;
      word-spacing: 210px;
    }
  </style>
</head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
  .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
  .fa-address-card-o,.fa-area-chart {font-size:200px}
</style>

<?php
include('include/navbar.php');
?>

<!-- Header -->
<header class="w3-container w3-center w3-black" style="padding:128px 16px">
  <h1 class="w3-margin w3-text-red w3-jumbo">฿IBLIOTECHA</h1>
  <p class="w3-xlarge w3-text-green">FIND YOUR R00T.</p>
</header>

<body>
<div class="w3-card-4 w3-dark-grey">
  <div class="w3-container w3-center">
    <h1><strong>Staff</strong></h1>
    <img src="include/img_avatar3.png" alt="Staff" title="Didakt" >
    <!-- <p>Didakt</p> -->
    <img src="include/img_avatar3.png" alt="Staff" title="2.0 NAO" >
    <!-- <p>Veronique</p> -->
    <img src="include/img_avatar3.png" alt="Staff" title="LefSec" >
    <!-- <p>Lefsec</p> -->
    <img src="include/img_avatar3.png" alt="Staff" title="Poulpitore" >
    <!-- <p>Poulpitore</p> -->
    <img src="include/img_avatar3.png" alt="Staff" title="Raphiz" >
    <!-- <p>Raphiz</p> -->
    <div class="staff">
    <span>Didakt</span>
    <span>2.0NAO</span>
    <span>LefSec</span>
    <span>Poulpitore</span>
    <span>Raphiz</span>
    </div>
    <p>The staff is so sexy !</p>
  </div>
  <div class="w3-container w3-center">
    <fieldset>
     <label for="email1">Email :</label><br />
     <input type="text" name="email1" id="email1" autocomplete="off"><br>
     <input type="hidden" name="email2" id="email2" value="" autocomplete="off">
     <input type="submit" value="Submit" class="button w3-button w3-black">
    </fieldset>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <a href="https://twitter.com/BIBLIOTECHA_OF"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Powered by Didakt Community</p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</html>
