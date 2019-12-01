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
    
  <body  id="page-bonus">
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
            <li class="breadcrumb-item active">Bonus</li>
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
          </p>
          <p>
            Some were requirements of the project.
          </p>
          <p>
            Some were just for fun.
          </p>
        </div>        

        <!-- The tabbed area - using Bootstrap nave & tabbing support
        ------------------------------------------------------------ -->
        <div id="tabbed-area">
  
           <!-- The tabs themselves -->
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" data-toggle="tab" href="#nav-canvas-drawing" role="tab">Canvas Drawing</a>
              <a class="nav-item nav-link" data-toggle="tab" href="#nav-svg-drawing" role="tab">SVG Drawing</a>
              <a class="nav-item nav-link" data-toggle="tab" href="#nav-secret" role="tab">Secret Page</a>
              <a class="nav-item nav-link" data-toggle="tab" href="#nav-TBD" role="tab">Broken Link</a>
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
            <div class="tab-pane fade" id="nav-svg-drawing" role="tabpanel" >
              <h5 class="pane-header">A simple SVG drawing</h5>
              <div class="row">
                <div class="col-md-2 align-self-center">
                  <button type="button" class="btn btn-secondary btn-sm btn-block" id="btn-svg-pan-up">Pan Up</button>
                  <button type="button" class="btn btn-secondary btn-sm btn-block" id="btn-svg-pan-down">Pan Down</button>
                  <button type="button" class="btn btn-secondary btn-sm btn-block" id="btn-svg-pan-left">Pan Left</button>
                  <button type="button" class="btn btn-secondary btn-sm btn-block" id="btn-svg-pan-right">Pan Right</button>
                  <button type="button" class="btn btn-secondary btn-sm btn-block" id="btn-svg-zoom-in">Zoom In</button>
                  <button type="button" class="btn btn-secondary btn-sm btn-block" id="btn-svg-zoom-out">Zoom Out</button>
                  <button type="button" class="btn btn-secondary btn-sm btn-block" id="btn-svg-reset">Reset</button>
                </div>
                <div class="col-md-10 ">
                  <!-- I originally had the SVG in a separate file and used an <embed>, however
                       I could not used DOM methods to manipulate it; so ended up pasting it in here -->
                  <svg id="svg-drawing" xmlns="http://www.w3.org/2000/svg" width="600" height="600">
                  	<g id="svg-origami-drawing" >
                  		<polyline fill="none" stroke="black" points="58,22 51,70 89,33 67,34 58,22" />
                  		<polyline fill="none" stroke="black" points="67,34 51,70" />
                  		<polyline fill="none" stroke="black" points="66,55 63,137 77,137 77,45" />
                  		<polyline fill="none" stroke="black" points="65,77 0,83 65,89" />
                  		<polyline fill="none" stroke="black" points="52,88 63,137" />
                  		<polyline fill="none" stroke="black" points="77,137 85,151 106,103 89,33" />
                  		<polyline fill="none" stroke="black" points="85,151 116,135 155,134 155,128 106,103" />
                  		<polyline fill="none" stroke="black" points="149,89 114,60 106,74 99,74" />
                  		<polyline fill="none" stroke="black" points="106,103 198,150 165,83 106,103" />
                  		<polyline fill="none" stroke="black" points="198,150 139,92" />
                  		<polyline fill="none" stroke="black" points="158,85 162,0 130,73" />
                  	</g>
                  </svg> 
                </div>
              </div>
            </div>   <!-- end of the tab -->
            
            <!-- the third tab contents -->
            <div class="tab-pane fade" id="nav-secret" role="tabpanel" >
              <div class="row ">
                <a href="authentication.php" class="btn btn-secondary btn-lg " id="btn-access-secret-page">Access the Secret Page</a>
              </div>
            </div>   <!-- end of the tab -->

            <!-- the fourth tab contents -->
            <div class="tab-pane fade" id="nav-TBD" role="tabpanel" >
              <div class="row" >
                <a href="x.php" id="broken-link"><img src="img/broken-link.png" width=250px></a>
              </div>
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
