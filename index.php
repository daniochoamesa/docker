<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Daniel Ochoa">

    <title>Top 5 Restaurants in Mallorca</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Mallorca Restaurant</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
            <?php 
            if (isset ($_SESSION['username']) )     #If a session exist, show logout
            {
            ?>
              <a class="nav-link js-scroll-trigger" href="logout.php">Logout</a>
            <?php
            }
            else  #Else, show login
            {
            ?>
              <a class="nav-link js-scroll-trigger" href="login.php">Login</a>
            <?php
            }
            ?>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Top 5</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>
            <li class="nav-item">                         <!-- Our new item on the nav-bar: search -->
              <a class="nav-link js-scroll-trigger">
                <form method="GET">
                Search something:
                <input type="text" name="cerca" value="<?= isset($_REQUEST["cerca"])?$_REQUEST["cerca"]:"" ?>">
                <input type="submit" value="Submit">
                <select name="orden">
                  <option value="asc">Ascendent</option>
                  <option value="desc">Descendent</option>
                </select>
                </form>
                </a>
              </li>
            </a>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To My Webpage!</div>
          <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio">Go to TOP 5</a>
        </div>
      </div>
    </header>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
            <?php
            if (isset ($_SESSION['username']) )
            {
              echo "Hola ". $_SESSION["username"] . ".<br>";
            }
            ?>
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Top 5</h2>
            <h3 class="section-subheading text-muted">This is the top 5 of best restaurants in Mallorca</h3>
          </div>
        </div>

        <!-- Here we call the file functions.php and the values -->

        <?php

            require 'restaurantsdb.php';          
            $rest = getRestaurants(
              isset($_REQUEST["cerca"])?$_REQUEST["cerca"]:"",
              isset($_REQUEST["orden"])?$_REQUEST["orden"]:"");
            
            foreach ($rest as $key=> $value){ 
        ?>    
        <!-- Here we print all the data we want to show in the div -->
        
        <div class="row">
          <div class="col-md-6 col-sm-6 portfolio-item rest">
              <div class="portfolio-caption">
                <img class="photo" src='<?=$value["filePath"] ?>' alt="">
                <h4><?=$value["name"] ?></h4>
                <p class="text-muted"><?=$value["locality"] ?></p>
                <p class="text-muted"><?=$value["route"] ?></p>
                <p class="text-muted"><?=$value["postalCode"] ?></p>
                <p class="text-muted"><?=$value["phoneNumber"] ?></p>
                <!-- Button that will go to the restaurant's page. -->
                <a href="index2.php?id=<?= $value['id'] ?>"><button class="btn-warning" type="submit" name='id_rest' value="<?=$value['id']?>">Detalles</button></a>
                </div>
              </div>
          </div>
        </div>
          
        <?php }
           ?>
      </div>
    </section>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">The evolution of this webpage.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Task 4.1</h4>
                    <h4 class="subheading">Array of Restaurants</h4>
                  </div>
                </div>
              </li>
              
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/e/ed/Octicons-search.svg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Task 4.2</h4>
                    <h4 class="subheading">Search and order</h4>
                  </div>
                </div>
              </li>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted">The creator of this incredible website.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
              <h4>Dani Ochoa</h4>
              <p class="text-muted">Creator</p>
            </div>
          </div>
          <div class="col-sm-4">
          </div>
        </div>

        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Dani Ochoa</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
