<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
  .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
  .fa-address-card-o,.fa-area-chart {font-size:200px}
</style>

<body>
<?php $name = basename($_SERVER['PHP_SELF']); ?>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <?php
    if ($name == 'index.php'){
      echo '<a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white"><i class="fa fa-bars" aria-hidden="true"></i>
Accueil</a>';
    }
    else {
      echo '<a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white"><i class="fa fa-bars" aria-hidden="true"></i>
Accueil</a>';
    }
    if ($name == 'a_propos.php'){
      echo '<a href="a_propos.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white"><i class="fa fa-fire" aria-hidden="true"></i>
À propos</a>';
    }
    else {
      echo '<a href="a_propos.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><i class="fa fa-fire" aria-hidden="true"></i>
À propos</a>';
    }
    if ($name == 'news.php'){
      echo '<a href="news.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white"><i class="fa fa-flask" aria-hidden="true"></i>
Nouveautés</a>';
    }
    else {
      echo '<a href="news.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><i class="fa fa-flask" aria-hidden="true"></i>
Nouveautés</a>';
    }
    if ($name == 'Documentations.php') {
      echo '<a href="Documentations.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white"><i class="fa fa-database" aria-hidden="true"></i>
Documentations</a>';
    }
    else {
      echo '<a href="Documentations.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><i class="fa fa-database" aria-hidden="true"></i>
Documentations</a>';
    }
    if ($name == 'All_categories.php') {
      echo '<a href="All_categories.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white"><i class="fa fa-tags" aria-hidden="true"></i>
Catégories</a>';
    }
    else {
      echo '<a href="All_categories.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><i class="fa fa-tags" aria-hidden="true"></i>
Catégories</a>';
    }
    if ($name == 'contact.php'){
     echo '<a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white"><i class="fa fa-envelope" aria-hidden="true"></i>
Contacts</a>'; 
    }
    else {
      echo '<a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><i class="fa fa-envelope" aria-hidden="true"></i>
Contacts</a>';
    }
    ?>
  <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right"><i class="fa fa-sign-in" aria-hidden="true"></i>
</a>
    </div>
  </div>
</div> 
</a>
    
    
    
    
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">À propos</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Nouveautés</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Documentations</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Catégories</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Contacts</a>
  </div>
</div>
