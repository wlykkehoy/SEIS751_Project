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
    
  <body  id="page-my-favorite-sake">
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
            <li class="breadcrumb-item active">My Favorite Sake</li>
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
          <h1>My Favorite Sake</h1>
          <p>
            Here are some of my favorite Sake. Click on one for more information.
          </p>
        </div>        

        <!-- The middle section with the list of sake and info display
        ------------------------------------------------------------ -->
        <div class="row" id="list-and-detail">
            
          <div class="col" id="sake-list">
            <!-- content filled in by code when page loads -->
          </div>
          
          <div class="col" id="sake-detail">
            <div class="row">
              <div class="sake-detail-label col-md-auto">Sake:</div>
              <div class="sake-detail-text col-md-auto" id="fld-name" ></div>
            </div>
        
            <div class="row">
              <div class="sake-detail-label col-md-auto">Grade:</div>
              <div class="sake-detail-text col-md-auto" id="fld-grade" ></div>
            </div>
        
            <div class="row">
              <div class="sake-detail-label col-md-auto">Overview:</div>
              <div class="sake-detail-text col-md-auto" id="fld-overview" ></div>
            </div>
        
            <div class="row">
              <div class="sake-detail-label col-md-auto">Tasting Notes:</div>
              <div class="sake-detail-text col-md-auto" id="fld-tasting-notes" ></div>
            </div>
        
            <div class="row">
              <div class="sake-detail-label col-md-auto">Food Pairing:</div>
              <div class="sake-detail-text col-md-auto" id="fld-food-pairing" ></div>
            </div>
        
            <div class="row">
              <div class="sake-detail-label col-md-auto">Rice:</div>
              <div class="sake-detail-text col-md-auto" id="fld-rice" ></div>
            </div>
        
            <div class="row">
              <div class="sake-detail-label col-md-auto">
                <a href="#" data-toggle="popover" title="What is Seimaibuai?" 
                  data-content="The percentage by weight of the rice grain remaining after the 
                                polishing process. For example, a seimaibuai of 70% indicates 70% 
                                of the rice grain remains after polishing (30% of the rice grain 
                                has been removed). As reference, common table rice has a seimaibuai 
                                of 90% (10% of the grain has been removed).">
                  Seimaibuai:
                </a>
              </div>
        
              <div class="sake-detail-text col-md-auto" id="fld-seimaibuai" ></div>
            </div>
        
            <div class="row">
              <div class="sake-detail-label col-md-auto">Brewery:</div>
              <div class="sake-detail-text col-md-auto" id="fld-brewery-name" ></div>
            </div>
        
            <div class="row">
              <div class="sake-detail-label col-md-auto">Brewery Location:</div>
              <div class="sake-detail-text col-md-auto" id="fld-brewery-location" ></div>
            </div>
          </div>   <!-- end of the detail area container -->
          
        </div>  <!-- end of the list and detail container -->

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
    <script src="js/my-favorite-sake.js"></script>

  </body>
</html>
