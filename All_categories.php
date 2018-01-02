<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>฿ibliotecha - Catégories</title>
</head>
<?php
include('include/navbar.php');
?>
<!-- Header -->
<header class="w3-container w3-black w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-text-red w3-jumbo">฿IBLIOTECHA</h1>
  <p class="w3-xlarge w3-text-green">TOUTE LES CATEGORIES.</p>
  <button class="w3-button w3-white w3-padding-large w3-large w3-margin-top">RECHERCHER</button>
</header>


<header class="w3-container w3-dark-grey" style="padding:32px 4px">
<h1>฿ibliotecha</h1>


<h2>Liste de toutes les catégories :</h2>
<p>(ces catégories ont plus de 5 pdf)</p> <!--un pdf pourra avoir plusieurs catégories. les catégories sont celles au dessus de 5 pdf pour le début mais si le nombre de pdf augmente alors le bareme augmentera -->

<ul>
    <li>Programations :
      <ol>
        <li> HTML 5</li>
        <li> CSS 3</li>
        <li> JavaScript</li>
        <li> PHP</li>
        <li> SQL</li>
        <li> C</li>
        <li> C++</li>
        <li> C#</li>
        <li> Python</li>
      </ol>
    </li>        <!--pour le moment c'est des exemples de catégories-->
    <li>Electroniques :
      <ol>
        <li> Arduino</li>
        <li> Hardware</li>
      </ol>
    </li>
    <li>Tags :
      <ol>
        <li> Type</li>
        <li> Date</li>
        <li> Taille</li>
        <li> Auteur</li>
        <li> Format</li>
        <li> Certifié ฿</li>
        <li> Langues :
          <ul>
            <li> Français</li>
            <li> Anglais</li>
            <li> Espagnole</li>
            <li> Allemand</li>
            <li> Italien</li>
            <li> Chinoi</li>
            <li> Latin</li>
            <li> Espéranto</li>
          </ul>
        </li>
        <li> Nombre de peer</li>
        <li> Nombre de téléchargements</li>
        <li> Date (de parution)</li>
        <li> Libraire</li>
      </ol>
    </li>
    <li>Crypto-monaies : <!-- Liens crypto-monaies. -->
      <ol>
        <li>BiteCoin</li>
        <li>ByteCoin</li>
        <li>XMR</li>
        <li>Etherum</li>
        <li>Etherum clasique</li>
        <li>SAL</li>
        <li>Monéro</li>
      </ol>
    </li>
</ul>
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
