<!DOCTYPE html>
<html>
<title>CodeType BAR Menu</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>
<?php
  require 'data.php';
?>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button">Close Menu</a>
  <a href="#VODKA" onclick="w3_close()" class="w3-bar-item w3-button">VODKA</a>
  <a href="#GIN" onclick="w3_close()" class="w3-bar-item w3-button">GIN</a>
  <a href="#RUM" onclick="w3_close()" class="w3-bar-item w3-button">RUM</a>
  <a href="#TEQUILA" onclick="w3_close()" class="w3-bar-item w3-button">TEQUILA</a>
  <a href="#WHISKEY" onclick="w3_close()" class="w3-bar-item w3-button">WHISKEY</a>
  <a href="#LIQUEUR" onclick="w3_close()" class="w3-bar-item w3-button">LIQUEUR</a>
  <a href="#MARTINI" onclick="w3_close()" class="w3-bar-item w3-button">MARTINI</a>
  <a href="#NON-ALCOHOL" onclick="w3_close()" class="w3-bar-item w3-button">NON-ALCOHOL</a>
</div>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-center w3-padding-16">CodeType BAR</div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  
  <!-- Vodka -->
  <div class="w3-container w3-padding-32" id="VODKA">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">V O D K A</h3>
  </div>
  
  <?php
    $i = 0;
    while ($row = mysqli_fetch_array($list_vodka)) {
      $i += 1;
      if ($i == 1) {
        echo '
          <div class="w3-row-padding w3-padding-16 w3-center">
        ';
      }
      echo '
          <div class="w3-quarter">
            <h3>' . $row["title"] . '</h3>
            <p>' . $row["detail"] . '<br>' . $row["remark"] . '</p>
          </div>
      ';
      if ($i == 4) {
        echo '
          </div>
        ';
        $i = 0;
      }
    }
    if (($i < 4) && ($i > 0)){
      echo '
        </div>
      ';
    }
  ?>

  <!-- Gin -->
  <div class="w3-container w3-padding-32" id="GIN">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">G I N</h3>
  </div>
  
  <?php
    $i = 0;
    while ($row = mysqli_fetch_array($list_gin)) {
      $i += 1;
      if ($i == 1) {
        echo '
          <div class="w3-row-padding w3-padding-16 w3-center">
        ';
      }
      echo '
          <div class="w3-quarter">
            <h3>' . $row["title"] . '</h3>
            <p>' . $row["detail"] . '<br>' . $row["remark"] . '</p>
          </div>
      ';
      if ($i == 4) {
        echo '
          </div>
        ';
        $i = 0;
      }
    }
    if (($i < 4) && ($i > 0)) {
      echo '
        </div>
      ';
    }
  ?>

  <!-- RUM -->
  <div class="w3-container w3-padding-32" id="RUM">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">R U M</h3>
  </div>
  
  <?php
    $i = 0;
    while ($row = mysqli_fetch_array($list_rum)) {
      $i += 1;
      if ($i == 1) {
        echo '
          <div class="w3-row-padding w3-padding-16 w3-center">
        ';
      }
      echo '
          <div class="w3-quarter">
            <h3>' . $row["title"] . '</h3>
            <p>' . $row["detail"] . '<br>' . $row["remark"] . '</p>
          </div>
      ';
      if ($i == 4) {
        echo '
          </div>
        ';
        $i = 0;
      }
    }
    if (($i < 4) && ($i > 0)) {
      echo '
        </div>
      ';
    }
  ?>

  <!-- TEQUILA -->
  <div class="w3-container w3-padding-32" id="TEQUILA">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">T E Q U I L A</h3>
  </div>
  
  <?php
    $i = 0;
    while ($row = mysqli_fetch_array($list_tequila)) {
      $i += 1;
      if ($i == 1) {
        echo '
          <div class="w3-row-padding w3-padding-16 w3-center">
        ';
      }
      echo '
          <div class="w3-quarter">
            <h3>' . $row["title"] . '</h3>
            <p>' . $row["detail"] . '<br>' . $row["remark"] . '</p>
          </div>
      ';
      if ($i == 4) {
        echo '
          </div>
        ';
        $i = 0;
      }
    }
    if (($i < 4) && ($i > 0)) {
      echo '
        </div>
      ';
    }
  ?>

  <!-- WHISKEY -->
  <div class="w3-container w3-padding-32" id="WHISKEY">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">W H I S K E Y</h3>
  </div>
  
  <?php
    $i = 0;
    while ($row = mysqli_fetch_array($list_whiskey)) {
      $i += 1;
      if ($i == 1) {
        echo '
          <div class="w3-row-padding w3-padding-16 w3-center">
        ';
      }
      echo '
          <div class="w3-quarter">
            <h3>' . $row["title"] . '</h3>
            <p>' . $row["detail"] . '<br>' . $row["remark"] . '</p>
          </div>
      ';
      if ($i == 4) {
        echo '
          </div>
        ';
        $i = 0;
      }
    }
    if (($i < 4) && ($i > 0)) {
      echo '
        </div>
      ';
    }
  ?>

  <!-- LIQUEUR -->
  <div class="w3-container w3-padding-32" id="LIQUEUR">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">L I Q U E U R</h3>
  </div>
  
  <?php
    $i = 0;
    while ($row = mysqli_fetch_array($list_liqueur)) {
      $i += 1;
      if ($i == 1) {
        echo '
          <div class="w3-row-padding w3-padding-16 w3-center">
        ';
      }
      echo '
          <div class="w3-quarter">
            <h3>' . $row["title"] . '</h3>
            <p>' . $row["detail"] . '<br>' . $row["remark"] . '</p>
          </div>
      ';
      if ($i == 4) {
        echo '
          </div>
        ';
        $i = 0;
      }
    }
    if (($i < 4) && ($i > 0)) {
      echo '
        </div>
      ';
    }
  ?>

  <!-- MARTINI -->
  <div class="w3-container w3-padding-32" id="MARTINI">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">M A R T I N I</h3>
  </div>
  
  <?php
    $i = 0;
    while ($row = mysqli_fetch_array($list_martini)) {
      $i += 1;
      if ($i == 1) {
        echo '
          <div class="w3-row-padding w3-padding-16 w3-center">
        ';
      }
      echo '
          <div class="w3-quarter">
            <h3>' . $row["title"] . '</h3>
            <p>' . $row["detail"] . '<br>' . $row["remark"] . '</p>
          </div>
      ';
      if ($i == 4) {
        echo '
          </div>
        ';
        $i = 0;
      }
    }
    if (($i < 4) && ($i > 0)) {
      echo '
        </div>
      ';
    }
  ?>

  <!-- NON-ALCOHOL -->
  <div class="w3-container w3-padding-32" id="NON-ALCOHOL">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">N O N - A L C O H O L</h3>
  </div>
  
  <?php
    $i = 0;
    while ($row = mysqli_fetch_array($list_non)) {
      $i += 1;
      if ($i == 1) {
        echo '
          <div class="w3-row-padding w3-padding-16 w3-center">
        ';
      }
      echo '
          <div class="w3-quarter">
            <h3>' . $row["title"] . '</h3>
            <p>' . $row["detail"] . '<br>' . $row["remark"] . '</p>
          </div>
      ';
      if ($i == 4) {
        echo '
          </div>
        ';
        $i = 0;
      }
    }
    if (($i < 4) && ($i > 0)) {
      echo '
        </div>
      ';
    }
  ?>

  <!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by <b>Eric Joh</b></p>
  <a href="admin">Admin Page</a>
</footer>

<?php
mysqli_close($conn);
?>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
