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
      <h1>฿ibliotecha, c'est quoi?</h1>
      <h4 class="w3-text-grey">฿ibliotecha, premier site de partage de pdf totalement gratuit sans pub.</h4>
      <h5 class="w3-padding-32">C'est un site de partage de pdf accès plutôt sur la high-tech, programmation et tout types de sciences (mais si vous êtes là pour d'autre raisons restez, c'est disponible).<br />  ฿ibliotecha est un projet qui est née le 29 Décembre 2017, sur le serveur discord Didakt Community.<br>Il a pour but de promouvoir le savoir et la culture, sur le domaine des sciences et de la High-Tech grace au partage de livre(PDF), vidéo(MP4,AVI).<br /> D'où son nom ฿ = du BiteCoin, ฿ibli = pour Bibliotéque, tech = pour la High-Tech.</h5>

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
      <h1>Comment ça marche?</h1>
      <h5 class="w3-padding-32 w3-text-green">Les systèmes</h5>

      <p class="w3-text-orange">Les documents sont partagés grace à une Data-Base(base de données[Bientôt P2p grace à l'application ^^]), c'est le staf qui gére ces archives, mais c'est la communauté qui l'alimente en le proposant de manière anonyme ou non sur #Contacte.<br />Ce qui est des pubs, le site s'engage à ne pas mettre de pubs ou de pop-up ou même à vendre vos cookies, le système de rémunération est un Miner intégré à la page web(pas de surchofe de processeur car on ne mais pas la capacité à 100%), le mineur ce charge d'enpreinté votre puissance de calcule pour miner du XMR tout pendant que vous restiez sur ฿ibliotecha.<br />(10 secondes = 0.0001€ ) Cela à été mis en place pour limiter la casse niveau logistique et équipement de ฿ibliotecha; donc si vous pouvez laisser ouvert la page web ^^ .</p>
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

</body>
</html>
