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
    
  <body id="page-wireframes">
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
            <li class="breadcrumb-item "><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Wireframes</li>
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
            <h1>Wireframes</h1>
            <p>
              Wireframes are a critical part of the website design process and are often referred 
              to as the skeleton or blueprint for the website. They provide a tool for thinking 
              through and capturing page structure, including content placement, rough sizing, 
              and navigation. Wireframes also help ensure each page has a clear and concise purpose. 
              During wireframing, we are not concerned with styling; that comes later. 
            </p>
            <p>
              Here are the wireframes created during the design of this website:
            </p>
          </div>        

          <!-- An overall container for this section; so we can place
               the list and the wireframe side-by-side
          ------------------------------------------------------------ -->
          <div class="row" id="wireframes-container">

            <!-- The nav menu listing each page
            ------------------------------------------------------------ -->
            <div id="wireframes-list" class="col-sm-4">
              <a class="list-group-item list-group-item-action" href="#list-item-1">Home</a>

              <a class="list-group-item list-group-item-action" href="#list-item-2">How Sake is Made</a>
              <a class="list-group-item list-group-item-action" href="#list-item-3">Sake Breweries</a>
              <a class="list-group-item list-group-item-action" href="#list-item-4">My Favorite Sake</a>
              <a class="list-group-item list-group-item-action" href="#list-item-5">Sake Industry News</a>

              <a class="list-group-item list-group-item-action" href="#list-item-6">Content Map</a>
              <a class="list-group-item list-group-item-action" href="#list-item-7">Wireframes</a>
              <a class="list-group-item list-group-item-action" href="#list-item-8">Project Walkthrough</a>
              <a class="list-group-item list-group-item-action" href="#list-item-9">PageSpeed Insights</a>
              <a class="list-group-item list-group-item-action" href="#list-item-10">Credits and Resources</a>

              <a class="list-group-item list-group-item-action" href="#list-item-11">Bonus</a>

              <a class="list-group-item list-group-item-action" href="#list-item-12">Contact</a>

              <a class="list-group-item list-group-item-action" href="#list-item-13">Secret Page</a>
            </div>

            <!-- The PDF for the wireframe of each page
            ------------------------------------------------------------ -->
            <div data-spy="scroll" data-target="#wireframes-list" data-offset="0" class="col-sm-8" id="wireframes">
              <h4 id="list-item-1">Page: Home</h4>
              <iframe src="pdf/wireframe-home.pdf#toolbar=0" width="600px" height="375px"></iframe>

              <h4 id="list-item-2">Page: How Sake is Made</h4>
              <iframe src="pdf/wireframe-how-sake-is-made.pdf#toolbar=0" width="600px" height="375px"></iframe>
              <h4 id="list-item-3">Page: Sake Breweries</h4>
              <iframe src="pdf/wireframe-sake-breweries.pdf#toolbar=0" width="600px" height="375px"></iframe>
              <h4 id="list-item-4">Page: My Favorite Sake</h4>
              <iframe src="pdf/wireframe-my-favorite-sake.pdf#toolbar=0" width="600px" height="375px"></iframe>
              <h4 id="list-item-5">Page: Sake Industry News</h4>
              <iframe src="pdf/xxxxxxx.pdf#toolbar=0" width="600px" height="375px"></iframe>

              <h4 id="list-item-6">Page: Content Map</h4>
              <iframe src="pdf/xxxxxxx.pdf#toolbar=0" width="600px" height="375px"></iframe>
              <h4 id="list-item-7">Page: Wireframes</h4>
              <iframe src="pdf/xxxxxxx.pdf#toolbar=0" width="600px" height="375px"></iframe>
              <h4 id="list-item-8">Page: Project Walkthrough</h4>
              <iframe src="pdf/xxxxxxx.pdf#toolbar=0" width="600px" height="375px"></iframe>
              <h4 id="list-item-9">Page: PageSpeed Insights</h4>
              <iframe src="pdf/xxxxxxx.pdf#toolbar=0" width="600px" height="375px"></iframe>
              <h4 id="list-item-10">Page: Credits and Resources</h4>
              <iframe src="pdf/xxxxxxx.pdf#toolbar=0" width="600px" height="375px"></iframe>

              <h4 id="list-item-11">Page: Bonus</h4>
              <iframe src="pdf/xxxxxxx.pdf#toolbar=0" width="600px" height="375px"></iframe>

              <h4 id="list-item-12">Page: Contact</h4>
              <iframe src="pdf/xxxxxxx.pdf#toolbar=0" width="600px" height="375px"></iframe>

              <h4 id="list-item-13">Page: Secret Page</h4>
              <iframe src="pdf/xxxxxxx.pdf#toolbar=0" width="600px" height="375px"></iframe>
            </div>

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
    <script src="js/wireframes.js"></script>

  </body>
</html>
