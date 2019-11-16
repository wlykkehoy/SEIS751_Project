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
    
  <body  id="page-bonus">
    <div class="container-fluid my-page-wrapper">   <!-- wraps the entire page contents -->

      <!-- ===========================================================
          HEADER - NAV BAR / BREADCRUMBS
      ============================================================ -->
      <header>
        <!-- Main navigation bar / menu
        ------------------------------------------------------------ -->
        <nav class="navbar navbar-expand-md fixed-top" id="page-navbar">
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
            <li class="breadcrumb-item active">bonus</li>
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
          <h1>Bonus Items</h1>
          <p>
            Here you will find some bonus items.
            Some were requirements of the project.
            Some were just for fun.
          </p>
        </div>        

        <!-- The tabbed area - using Bootstrap nave & tabbing support
        ------------------------------------------------------------ -->
        <div id="tabbed-area">
  
           <!-- The tabs themselves -->
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-canvas-drawing" role="tab">Canvas Drawing</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-svg-drawing" role="tab">SVG Drawing</a>
              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-TBD" role="tab">...TBD...</a>
            </div>
          </nav>

          <!-- This div encompases the contents of each tab -->
          <div class="tab-content" id="nav-tabContent">
  
            <!-- the first tab contents -->
            <div class="tab-pane fade show active" id="nav-canvas-drawing" role="tabpanel">
              <h5 class="pane-header">A simple 2D drawing using canvas</h5>
              <p>
                Creating drawings this way is very tedious (this one required ~100 lines of JavaScript). 
                A technique I eventually stumbled on which worked well for me was to initially not worry 
                about the size of the canvas nor where on the canvas I wanted to put each item. Rather, sketch out each 
                item on graph paper (electronic graph paper) and record the coordinates (make sure you use the 
                upper/left as 0,0!). In the canvas drawing commands, use these coordinates (again, don’t worry 
                about size or position here). Then ‘wrap’ the drawing commands for each item in a transform to 
                scale and position the item:
              </p>
                <code>
                  context.save(); <br>
                  context.transform(scaleX, 0, 0, scaleY, posX, posY); <br>
                  ... drawing commands for the item ... <br>
                  context.restore(); <br>
                </code>
              <canvas id="canvas-drawing" width="400" height="400">
                Your browser does not support the canvas element.
              </canvas>
            </div>    <!-- end of the tab -->
            
            <!-- the second tab contents -->
            <div class="tab-pane fade" id="nav-svg-drawing" role="tabpanel" aria-labelledby="nav-profile-tab">
              <p>... svg drawing coming soon ...</p>
            </div>   <!-- end of the tab -->
            
            <!-- the third tab contents -->
            <div class="tab-pane fade" id="nav-TBD" role="tabpanel" aria-labelledby="nav-contact-tab">
              <p>... other stuff coming soon ...</p>
            </div>   <!-- end of the tab -->

          </div>   <!-- end of the tabs contents -->
  
        </div>   <!-- End of div encompassing the contents of each tab -->

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
    <script src="js/bonus.js"></script>

  </body>
</html>
