<?php include "config.php";?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <!-- MAIN CSS -->
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <script src="https://kit.fontawesome.com/902b4b52d9.js" crossorigin="anonymous"></script>


  <title><?php echo "$title"; ?></title>
</head>

<body>
  <header class="px-5 py-3">
    <div id="logoBox">
      <div id="headerImgBox">
        <a class="header-logo" href="index.php"><img class="header-logo" src="images/logo.jpg" alt="A4Loop Logo"></a>
      </div>
    </div>
    <!-- START NAV-->

    


    <nav>
        <ul>
          <?php 
            foreach($nav as $key => $value) {
              if(THIS_PAGE == $key) {
                echo '<li><a class="current" href="'.$key.'">'.$value.'</a></li>';
              } else {
                echo '<li><a href="'.$key.'">'.$value.'</a></li>';
              }
            }
          ?>
        </ul>
      </nav> 





    <!-- END NAV -->
  </header>

  <!-- START MAIN and CONTAINER-->
  <main class="container">

  <div class="row justify-content-center">
      <div class="col pt-3 mt-3">
        <h2 class=""><? echo "$pageID "; ?><h2>
      </div>
    </div>