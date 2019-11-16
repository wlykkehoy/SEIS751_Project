<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Wade's - SEIS751 Project</title>
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
    
  <body id="page-content-map">
    <div class="container-fluid my-page-wrapper">   <!-- wraps the entire page contents -->

      <!-- ===========================================================
          HEADER - NAV BAR / BREADCRUMBS
      ============================================================ -->
      <header>
        <!-- Main navigation bar / menu
        ------------------------------------------------------------ -->
        <nav class="navbar navbar-expand-md fixed-top "  id="page-navbar">
          <a class="navbar-brand" href="index.php">Sake</a>
          <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="main-navigation">
            <ul class="navbar-nav">
              
              <li class="nav-item ">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              
<!-- navbar will be updated from Home when fully fleshed out -->
              <li class="nav-item">
                <a class="nav-link" href="#">!! add rest !!</a>
              </li>

            </ul>
          </div>
        </nav>      <!-- end of main navigation bar / menu -->

        <!-- Breadcrumb
        ------------------------------------------------------------ -->
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item "><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Content Map</li>
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
            <h1>Content Map</h1>
            <p>
              The first step in designing this website was creation of a content map. The content 
              map captures, at a very high level, the logical groupings of content and how they 
              will be organized within the website.
            </p>
            <p>
              With no further ado, here is the content map:
            </p>
          </div>        

          <!-- An overall container for this section
          ------------------------------------------------------------ -->
          <div class="row" id="content-map-container">
              <iframe src="pdf/content-map.pdf#toolbar=0" width="600px" height="400px"></iframe>
          </div>   <!-- end of the container for this section of the page -->

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


  </body>
</html>
