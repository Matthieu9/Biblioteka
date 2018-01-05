<!DOCTYPE html>
<html>

<head>
  <title>฿IBLIOTECHA - À propos</title>
</head>

<?php
include('include/navbar.php');
?>

<!-- Header -->
<header class="w3-container w3-black w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-text-red w3-jumbo">฿IBLIOTECHA</h1>
  <p class="w3-xlarge w3-text-green">FIND YOUR R00T.</p>
</header>

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

</body>
</html>
