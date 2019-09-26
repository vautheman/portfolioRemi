<?php include 'include/connectBDD.php'; ?>
<!DOCTYPE HTML>
 <html>
    <head>
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta charset="utf-8">
        <!-- Description, Keywords and Author -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Rémi Bregeard</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
		    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- style -->
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <!-- style -->
        <!-- bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- responsive -->
        <link href="css/responsive.css" rel="stylesheet" type="text/css">
        <!-- font-awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- font-awesome -->
        <link href="css/effects/set2.css" rel="stylesheet" type="text/css">
        <link href="css/effects/normalize.css" rel="stylesheet" type="text/css">
        <link href="css/effects/component.css"  rel="stylesheet" type="text/css" >
	</head>
    <body>
  	<!-- header -->
      <header role="header">
        <div class="container">
        <!-- logo -->
        <h1>
          <a href="index.html" title="avana LLC"><img src="images/logo.png" title="avana LLC" alt="avana LLC"/></a>
        </h1>
        <!-- logo -->
        <!-- nav -->
        <nav role="header-nav" class="navy">
          <ul>
          <li class="nav-active"><a href="index.html" title="Work">Work</a></li>
          <li><a href="about.html" title="About">About</a></li>
          <li><a href="blog.html" title="Blog">Blog</a></li>
          <li><a href="contact.html" title="Contact">Contact</a></li>
          </ul>
        </nav>
        <!-- nav -->
        </div>
      </header>
        <!-- header -->
        <!-- main -->
      <main role="main-home-wrapper" class="container">
        <div class="row">
        	<section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
          	<article role="pge-title-content">
            	<header>
              	<h2><span>Rémi</span> BREGEARD</h2>
              </header>
              <p>Bienvenu sur mon site internet, vous trouverez ici toutes les documentations que j'ai réalisé au cour de mon cursus Post-BAC</p>
            </article>
          </section>

          <!-- Primary -->
          <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">
            <figure class="effect-oscar">
              <img src="images/home-images/image-1.jpg" alt="" class="img-responsive"/>
              <figcaption>
                <h2>Eliana Dedda<span> Identity</span></h2>
                <p>Personal Brand Identity.</p>
                <a href="works-details.html">View more</a>
              </figcaption>
            </figure>
          </section>

          <div class="clearfix"></div>

          <!--Navbar-->
          <div class="container-fluid m-4">
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Tout</a>
                </li>
                <?php
                $req = $bdd->prepare("SELECT * FROM portfolio");
                $req->execute();
                while($cur = $req->fetch())
                {
                ?>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?id=<?php echo $cur[0]; ?>"><?php echo $cur[1]; ?></a>
                </li>
                <?php } ?>
              </ul>
                <!-- Links -->
                <form class="form-inline">
                  <div class="md-form my-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                  </div>
                </form>
              </div>
              <!-- Collapsible content -->
            </nav>
            <!--/.Navbar-->
          </div>


          <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">
          	<ul class="grid-lod effect-2" id="grid">
              <?php
              if(isset($_GET['id']))
              {
                $req = $bdd->prepare("SELECT * FROM portfolioItems WHERE MOD(itemId,2) = ? AND portId = ?");
                $req->execute(array(1, $_GET['id']));
                while($cur = $req->fetch())
                {
                  ?>
                  <li>
                    <figure class="effect-oscar">
                      <img src="images/portfolio/<?php echo $cur[4]; ?>" alt="" class="img-responsive"/>
                      <figcaption>
                        <h2><?php echo $cur[2]; ?></h2>
                        <p><?php echo $cur[3]; ?></p>
                        <a href="works-details.php?idItem=<?php echo $cur[0]; ?>">Voir plus</a>
                      </figcaption>
                    </figure>
                  </li>
                  <?php
                }
              } else {
              $req = $bdd->prepare("SELECT * FROM portfolioItems WHERE MOD(itemId,2) = ?");
              $req->execute(array(1));
              while($cur = $req->fetch())
              {
              ?>
            	<li>
                <figure class="effect-oscar">
                  <img src="images/portfolio/<?php echo $cur[4]; ?>" alt="" class="img-responsive"/>
                  <figcaption>
                    <h2><?php echo $cur[2]; ?></h2>
                    <p><?php echo $cur[3]; ?></p>
                    <a href="works-details.php?idItem=<?php echo $cur[0]; ?>">Voir plus</a>
                  </figcaption>
                </figure>
              </li>
              <?php
                }
              }
              ?>
            </ul>
          </section>

          <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">
          	<ul class="grid-lod effect-2" id="grid">
              <?php
              if(isset($_GET['id']))
              {
                $req = $bdd->prepare("SELECT * FROM portfolioItems WHERE MOD(itemId,2) = ? AND portId = ?");
                $req->execute(array(0, $_GET['id']));
                while($cur = $req->fetch())
                {
                  ?>
                  <li>
                    <figure class="effect-oscar">
                      <img src="images/portfolio/<?php echo $cur[4]; ?>" alt="" class="img-responsive"/>
                      <figcaption>
                        <h2><?php echo $cur[2]; ?></h2>
                        <p><?php echo $cur[3]; ?></p>
                        <a href="works-details.php?idItem=<?php echo $cur[0]; ?>">Voir plus</a>
                      </figcaption>
                    </figure>
                  </li>
                  <?php
                }
              } else {
              $req = $bdd->prepare("SELECT * FROM portfolioItems WHERE MOD(itemId,2) = ?");
              $req->execute(array(0));
              while($cur = $req->fetch())
              {
              ?>
            	<li>
                <figure class="effect-oscar">
                  <img src="images/portfolio/<?php echo $cur[4]; ?>" alt="" class="img-responsive"/>
                  <figcaption>
                    <h2><?php echo $cur[2]; ?></h2>
                    <p><?php echo $cur[3]; ?></p>
                    <a href="works-details.php?idItem=<?php echo $cur[0]; ?>">Voir plus</a>
                  </figcaption>
                </figure>
              </li>
              <?php
                }
              }
              ?>
            </ul>

                </section>

                <div class="clearfix"></div>

            </div>

        </main>

    	<!-- main -->

        <!-- footer -->

        <footer role="footer">

            <!-- logo -->

                <h1>

                    <a href="index.html" title="avana LLC"><img src="images/logo.png" title="avana LLC" alt="avana LLC"/></a>

                </h1>

            <!-- logo -->

            <!-- nav -->

            <nav role="footer-nav">

            	<ul>

                	<li><a href="index.html" title="Work">Work</a></li>

                    <li><a href="about.html" title="About">About</a></li>

                    <li><a href="blog.html" title="Blog">Blog</a></li>

                    <li><a href="contact.html" title="Contact">Contact</a></li>

                </ul>

            </nav>

            <!-- nav -->

            <ul role="social-icons">

            	<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                <li><a href="#"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>

            </ul>

            <p class="copy-right">&copy; 2015  avana LLC.. All rights Resved</p>

        </footer>

        <!-- footer -->



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>

        <script src="js/jquery.min.js" type="text/javascript"></script>

        <!-- custom -->

		<script src="js/nav.js" type="text/javascript"></script>

        <script src="js/custom.js" type="text/javascript"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <script src="js/bootstrap.min.js" type="text/javascript"></script>

        <script src="js/effects/masonry.pkgd.min.js"  type="text/javascript"></script>

		<script src="js/effects/imagesloaded.js"  type="text/javascript"></script>

		<script src="js/effects/classie.js"  type="text/javascript"></script>

		<script src="js/effects/AnimOnScroll.js"  type="text/javascript"></script>

        <script src="js/effects/modernizr.custom.js"></script>

        <!-- jquery.countdown -->

        <script src="js/html5shiv.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    </body>

</html>
