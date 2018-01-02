<!DOCTYPE html>
<html>

<head>
  <title>฿IBLIOTECHA</title>
    <style type="text/css">
    header {
      background-image: url("include/codecode.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
    }
    #search {
      visibility: hidden;
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
    $("#button").click(function(){
        $("#search").show();
    });
});
  </script>
</head>

<?php
include('include/navbar.php');
?>
<!-- Header -->
<header class="w3-container w3-black w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-text-red w3-jumbo">฿IBLIOTECHA</h1>
  <p class="w3-xlarge w3-text-green">FIND YOUR R00T.</p>
  <button class="w3-button w3-white w3-padding-large w3-large w3-margin-top" id="button">RECHERCHER</button>
  <form class="w3-container" id="search">
<br>
  <input class="w3-input w3-border" type="text">
</form>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-dark-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Connexion</h1>
       <form class="w3-container">

<label>Pseudo</label>
<input class="w3-input" type="text">

<label>Mot de passse</label>
<input class="w3-input" type="password"><br>
<input type="submit" <input type="submit" class="w3-btn w3-ripple w3-red" value="Se connecter !">
</form> 

      <p class="w3-text-grey"></p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-address-card-o w3-padding-64 w3-text-red "></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-black w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-area-chart w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>Inscription</h1>
       <form class="w3-container" action="include/register.php" method="post">

<label>Pseudo</label>
<input class="w3-input" type="text" name="username">

<label>Mot de passe</label>
<input class="w3-input" type="text" name="pass">

<label>Mot de passe confirmation</label>
<input class="w3-input" type="text"><br>
<input type="submit" class="w3-btn w3-ripple w3-red" value="S'inscrir !">
</form> 
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge"></h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank"></a>w3css</p>
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
