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
    
  <body  id="page-my-favorite-sake">
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

        <!-- xxxxxxxxxxxxx
        ------------------------------------------------------------ -->

<div id="list-and-details">

<div class="row">
    
  <div class="col-4" id="sake-list">
<!--    
    <button type="button" class="list-group-item list-group-item-action">sake1</button>
    <button type="button" class="list-group-item list-group-item-action">sake2</button>
    <button type="button" class="list-group-item list-group-item-action">sake3</button>
    <button type="button" class="list-group-item list-group-item-action">sake4</button>
    <button type="button" class="list-group-item list-group-item-action">sake5</button>
-->
    <!-- content filled in by code when page loads -->
  </div>
  
  <div class="col-8" id="sake-detail">

    <div class="row">
      <div class="sake-detail-label col-md-auto">Sake:</div>
      <div class="sake-detail-text col-md-auto" id="fld-name" >xxxx</div>
    </div>

    <div class="row">
      <div class="sake-detail-label col-md-auto">Grade:</div>
      <div class="sake-detail-text col-md-auto" id="fld-grade" >xxxx</div>
    </div>

    <div class="row">
      <div class="sake-detail-label col-md-auto">Overview:</div>
      <div class="sake-detail-text col-md-auto" id="fld-overview" >xxxx</div>
    </div>

    <div class="row">
      <div class="sake-detail-label col-md-auto">Tasting Notes:</div>
      <div class="sake-detail-text col-md-auto" id="fld-tasting-notes" >xxxx</div>
    </div>

    <div class="row">
      <div class="sake-detail-label col-md-auto">Food Pairing:</div>
      <div class="sake-detail-text col-md-auto" id="fld-food-pairing" >xxxx</div>
    </div>

    <div class="row">
      <div class="sake-detail-label col-md-auto">Rice:</div>
      <div class="sake-detail-text col-md-auto" id="fld-rice" >xxxx</div>
    </div>

    <div class="row">
      <div class="sake-detail-label col-md-auto">Seimaibuai:</div>
      <div class="sake-detail-text col-md-auto" id="fld-seimaibuai" >xxxx</div>
    </div>

    <div class="row">
      <div class="sake-detail-label col-md-auto">Brewery:</div>
      <div class="sake-detail-text col-md-auto" id="fld-brewery-name" >xxxx</div>
    </div>

    <div class="row">
      <div class="sake-detail-label col-md-auto">Brewery Location:</div>
      <div class="sake-detail-text col-md-auto" id="fld-brewery-location" >xxxx</div>
    </div>


<!--    
<p>Sake: <span id="fld-name">x</span></p>
<p>Grade: <span id="fld-grade">x</span></p>
<p>Overview: <span id="fld-overview">x</span></p>
<p>Tasting Notes: <span id="fld-tasting-notes"></span></p>
<p>Food Pairing: <span id="fld-food-pairing"></span></p>
<p>Rice: <span id="fld-rice"></span></p>
<p>Seimaibuai: <span id="fld-seimaibuai"></span></p>
<p>Brewery: <span id="fld-brewery-name"></span></p>
<p>Brewery Location: <span id="fld-brewery-location"></span></p>
-->

  </div>
  
  </div> 
  
</div>  <!-- end of the list plus details -->








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
    <script src="js/display-sake-list.js"></script>


  </body>
</html>
