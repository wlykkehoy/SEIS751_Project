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
    
  <body id="page-home">
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
            <li class="breadcrumb-item active">Home</li>
          </ol>
        </nav>
      </header>


      <!-- ===========================================================
          MAIN BODY OF THE PAGE
      ============================================================ -->
      <main>
          <!-- Page introduction / general info
          ------------------------------------------------------------ -->
          <div class="page-description">
            <h1>Welcome to my Project</h1>
            <p>
              This site was created as part of the <cite>SEIS751 - Web App Design and Development</cite> 
              course at the University of St. Thomas.
            </p>
          </div>        

          <!-- Cards grouping info about the site's content
          ------------------------------------------------------------ -->
          <div class="card-deck">
            
            <div class="card">
              <div class="card-header">Featured</div>
              <div class="card-body">
                <p class="card-text">
                  Curious about Japanes Sake? Find information about:
                  <li class="card-list-item">
                    <a href="how-sake-is-made.php">How sake is made</a>
                  </li>
                  <li class="card-list-item">
                    <a href="sake-breweries.php">Some sake breweries</a>
                  </li>
                  <li class="card-list-item">
                    <a href="my-favorite-sake.php">Some of my favorite sake</a>
                  </li>
                  <li class="card-list-item">
                    <a href="sake-industry-news.php">Sake industry news</a>
                  </li>
                </p>
                <p>
                  Explore some bonus items. 
                  What are they? 
                  I'm not telling!
                  You’ll just have to <a href="bonus.php">go check them out...</a>
                </p>
              </div>
            </div>  <!-- end of the card -->
    
            <div class="card">
              <div class="card-header">About This Project</div>
              <div class="card-body">
                <p class="card-text">
                  Explore some artifacts from building this site:
                  <li class="card-list-item">
                    <a href="content-map.php">Content Map</a>
                  </li>
                  <li class="card-list-item">
                    <a href="wireframes.php">Wireframes</a>
                  </li>
                  <li class="card-list-item">
                    <a href="project-walkthrough.php">Project Walkthrough</a>
                  </li>
                  <li class="card-list-item">
                    <a href="pagespeed-insights.php">PageSpeed Insights</a>
                  </li>
                  <li class="card-list-item">
                    <a href="credits-and-resources.php">Credits and Resources</a>
                  </li>
                </p>
              </div>
            </div>   <!-- end of the card -->

          </div>    <!-- end of Cards grouping info about the site's content -->

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
    <script src="js/index.js"></script>

  </body>
</html>
