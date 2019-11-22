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
    
  <body  id="page-project-walkthrough">
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
            <li class="breadcrumb-item active">Project Walkthrough</li>
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
          <h1>Project Walkthrough</h1>
          <p>
            We were given a list of specific requirements the project needed to meet. 
            Following are those requirements with where on this site the requirement is met.
          </p>
        </div>        

        <!-- List of requirements
        ------------------------------------------------------------ -->
        <!-- overall container for the list -->
        <div class="overflow-auto" id="requirements-list">      
          
          <!-- the items of the list -->
          <div class="requirements-list-item" >
            <p class="list-item-header">
              Content Map
            </p>
            <p class="list-item-detail">
              A content map may be found on the <a href="content-map.php">Content Map</a> page.
            </p>
          </div>
          
         <div class="requirements-list-item" >
            <p class="list-item-header">
              Wireframe
            </p>
            <p class="list-item-detail">
              A wireframe for each page may be found on the <a href="wireframes.php">Wireframes<a/> page.
            </p>
          </div>

          <div class="requirements-list-item" >
            <p class="list-item-header">
              A unique favicon
            </p>
            <p class="list-item-detail">
              The favicon is displayed in the browser tab on each page. It is the Japanese character for Sake.
            </p>
          </div>

          <div class="requirements-list-item" >
            <p class="list-item-header">
              <<< placeholder item >>>
            </p>
            <p class="list-item-detail">
              This is a placeholder item with longer detail information so that I can see how it wraps.
              This is a placeholder item with longer detail information so that I can see how it wraps.
              This is a placeholder item with longer detail information so that I can see how it wraps.
              This is a placeholder item with longer detail information so that I can see how it wraps.
            </p>
          </div>
          
          <div class="requirements-list-item" >
            <p class="list-item-header">
              <<< placeholder item >>>
            </p>
            <p class="list-item-detail">
              This is a placeholder item with longer detail information so that I can see how it wraps.
              This is a placeholder item with longer detail information so that I can see how it wraps.
              This is a placeholder item with longer detail information so that I can see how it wraps.
              This is a placeholder item with longer detail information so that I can see how it wraps.
            </p>
          </div>

          <div class="requirements-list-item" >
            <p class="list-item-header">
              <<< placeholder item >>>
            </p>
            <p class="list-item-detail">
              This is a placeholder item with longer detail information so that I can see how it wraps.
              This is a placeholder item with longer detail information so that I can see how it wraps.
              This is a placeholder item with longer detail information so that I can see how it wraps.
              This is a placeholder item with longer detail information so that I can see how it wraps.
            </p>
          </div>

          <div class="requirements-list-item" >
            <p class="list-item-header">
              <<< placeholder item >>>
            </p>
            <p class="list-item-detail">
              This is a placeholder item with longer detail information so that I can see how it wraps.
              This is a placeholder item with longer detail information so that I can see how it wraps.
              This is a placeholder item with longer detail information so that I can see how it wraps.
              This is a placeholder item with longer detail information so that I can see how it wraps.
            </p>
          </div>

          <div class="requirements-list-item" >
            <p class="list-item-header">
              <<< placeholder item >>>
            </p>
            <p class="list-item-detail">
              This is a placeholder item with longer detail information so that I can see how it wraps.
              This is a placeholder item with longer detail information so that I can see how it wraps.
              This is a placeholder item with longer detail information so that I can see how it wraps.
              This is a placeholder item with longer detail information so that I can see how it wraps.
            </p>
          </div>
          
  

        </div>     <!-- end of overall container for the list -->


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
