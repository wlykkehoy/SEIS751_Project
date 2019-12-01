<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Wade's SEIS751 Project</title>
    <meta charset="utf-8">
    <meta name="description" content="St. Thomas SEIS751 Project">
    <meta name="keywords" content="SEIS751,sake">
    <meta name="author" content="Wade Lykkehoy">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
      
    <!-- Stuff for Bootstrap 
    ------------------------------------------------------------ -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	

    <!-- My CSS is very last to override all others 
    ------------------------------------------------------------ -->    
    <link rel="stylesheet" href="css/main.css">
  </head>
    
  <body id="page-sake-breweries">
    <div class="container-fluid my-page-wrapper">   <!-- wraps the entire page contents -->

      <!-- ===========================================================
          HEADER - NAV BAR / BREADCRUMBS
      ============================================================ -->
      <header>
        <!-- Main navigation bar / menu
        ------------------------------------------------------------ -->
        <?php require_once("navbar.php"); ?>

        <!-- Breadcrumb
        ------------------------------------------------------------ -->
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Sake Breweries</li>
          </ol>
        </nav>

      </header>

      <!-- ===========================================================
          THE MAIN BODY OF THE PAGE
      ============================================================ -->
      <main>
        <!-- Page introduction / general info
        ------------------------------------------------------------ -->
        <div class="page-description">
          <h1>Sake Breweries</h1>
          <p>
            There are approximately 1,200 active sake breweries (sakagura or kura) in Japan today, 
            ranging in size from giant corporate breweries to small family run breweries. 
            Surprisingly, only a handful host tours, where you can witness the brewing process. 
            Following are a few that I am aware of. 
            Note you should check ahead as some require reservations well in advance and only host 
            tours on certain days and certain times of the year.
          </p>
        </div>        

        <!-- Slide show (via a carousel) of sake breweries
        ------------------------------------------------------------ -->
        <div class="brewery-carousel">
          <div id="brewery-captions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#brewery-captions" data-slide-to="0" class="active"></li>
              <li data-target="#brewery-captions" data-slide-to="1"></li>
              <li data-target="#brewery-captions" data-slide-to="2"></li>
              <li data-target="#brewery-captions" data-slide-to="3"></li>
              <li data-target="#brewery-captions" data-slide-to="4"></li>
              <li data-target="#brewery-captions" data-slide-to="5"></li>
              <li data-target="#brewery-captions" data-slide-to="6"></li>
              <li data-target="#brewery-captions" data-slide-to="7"></li>
              <li data-target="#brewery-captions" data-slide-to="8"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/sake-breweries/gekkeikan.jpg" class="d-block  w-100" alt="Gekkeikan Brewery photo">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Gekkeikan Brewery</h5>
                  <p>in Kyoto</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/sake-breweries/hachinohe.jpg" class="d-block w-100" alt="Hachinohe Brewery photo">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Hachinohe Brewery</h5>
                  <p>in Aomori Prefecture</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/sake-breweries/ishikawa.jpg" class="d-block w-100" alt="Ishikawa Brewery photo">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Ishikawa Brewery</h5>
                  <p>in Tokyo</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/sake-breweries/kamoizumi.jpg" class="d-block w-100" alt="Kamoizumi Brewery photo">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Kamoizumi Brewery</h5>
                  <p>in Hiroshima Prefecture</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/sake-breweries/kobeShushinkan.jpg" class="d-block w-100" alt="Shushinkan Brewery photo">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Shushinkan Brewery</h5>
                  <p>in Kobe</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/sake-breweries/matsuoka.jpg" class="d-block w-100" alt="Matsuoka Brewery photo">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Matsuoka Brewery</h5>
                  <p>in Saitama Prefecture</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/sake-breweries/ozawa.jpg" class="d-block w-100" alt="Ozawa Brewery photo">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Ozawa Brewery</h5>
                  <p>in Tokyo</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/sake-breweries/suehiro.jpg" class="d-block w-100" alt="Suehiro Brewery photo">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Suehiro Brewery</h5>
                  <p>in Fukushima Prefecture</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#brewery-captions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#brewery-captions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>      <!-- end of Slide show (via a carousel) of sake breweries -->

      </main>


      <!-- ===========================================================
          PAGE FOOTER
      ============================================================ -->
      <footer>
        <?php require_once("footer.php"); ?>
      </footer>

    </div>   <!-- end of the overall page wrapper -->


    <!-- ===========================================================
        SCRIPTS GO WAY DOWN HERE AT THE BOTTOM
    ============================================================ -->    

    <!-- JS for jQuery (required by Bootstrap & I use directly also; must come before Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- JS for Bootstrap; note jQuery must come before -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- My JS - very last -->
    <script src="js/sake-breweries.js"></script>

  </body>
</html>
