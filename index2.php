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
        <a class="navbar-brand js-scroll-trigger" href="index.php">Mallorca Restaurant</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
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
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="index.php">Go to TOP 5</a>
        </div>
      </div>
    </header>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Top 5</h2>
            <h3 class="section-subheading text-muted">This is the top 5 of best restaurants in Mallorca</h3>
          </div>
        </div>

        <!-- Here we call the file functions.php and the values -->

        <?php
            include 'restaurantsdb.php';

            $datosunicos = getRestaurant($_GET['id']);
            foreach ($datosunicos as $key=> $value){

        ?>

    <div class="row">         <!-- Div where we will show all the information about the restaurant -->
            <div class="col-md-6 col-sm-6 portfolio-item rest">
                <div class="portfolio-caption">
                    <img class="photo" src='<?=$value["filePath"] ?>' alt="">
                    <h4><?=$value["name"] ?></h4>
                    <p class="text-muted"><?=$value["description"] ?></p>
                    <p class="text-muted"><?=$value["openingHours"] ?></p>
                    <p class="text-muted"><?=$value["priceCategory"] ?></p>
                    <p class="text-muted"><?=$value["locality"] ?></p>
                    <p class="text-muted"><?=$value["streetNumber"] ?></p>
                    <p class="text-muted"><?=$value["locality"] ?></p>
                    <p class="text-muted"><?=$value["website"] ?></p>
                    <p class="text-muted"><?=$value["postalCode"] ?></p>
                    <p class="text-muted"><?=$value["phoneNumber"] ?></p>
                </div>
            </div>
            </div>
            
            <?php }
            ?>
        </div>
        </section>