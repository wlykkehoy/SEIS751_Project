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
        <?php require_once("navbar.php"); ?>

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
        <div id="requirements-list">      
          
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
              A wireframe for each page may be found on the <a href="wireframes.php">Wireframes</a> page.
            </p>
          </div>

          <div class="requirements-list-item" >
            <p class="list-item-header">
              Include top-level sections for Home, About, Featured, and Contact
            </p>
            <p class="list-item-detail">
              This structure is reflected in the menu/navigation bar on all pages.
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
              Implementation of CSS Icons of Glyphs
            </p>
            <p class="list-item-detail">
              On the <a href="contact.php">Contact</a> page, there are SVG icons for LinkedIn, Facebook, Twitter, and GitHub.
            </p>
          </div>
          
          <div class="requirements-list-item" >
            <p class="list-item-header">
              At least one instance of the video element
            </p>
            <p class="list-item-detail">
              A video showing how Sake is made may be found on the <a href="how-sake-is-made.php">How Sake is Made</a> page. 
              The video file is hosted locally on the St Thomas GPS server.
            </p>
          </div>

          <div class="requirements-list-item" >
            <p class="list-item-header">
              At least one instance of the audio element
            </p>
            <p class="list-item-detail">
              An audio element for playing a podcast may be found on the <a href="sake-industry-news.php">Sake Industry News</a> page in one of the news items. 
              The audio file is hosted locally on the St Thomas GPS server.
            </p>
          </div>

          <div class="requirements-list-item" >
            <p class="list-item-header">
              An implementation of a slideshow
            </p>
            <p class="list-item-detail">
              On the <a href="sake-breweries">Sake Breweries</a> page is a slideshow of photos of some Sake Breweries.
            </p>
          </div>

          <div class="requirements-list-item" >
            <p class="list-item-header">
              At least one web font
            </p>
            <p class="list-item-detail">
              A brush-stroke font is used for the word ‘Sake’ in the upper left of the menu/navigation bar 
              and as a title for each page.
            </p>
          </div>
          
          <div class="requirements-list-item" >
            <p class="list-item-header">
              An implementation of a flexbox
            </p>
            <p class="list-item-detail">
              Every page uses flex layout. As you narrow the page, content shrinks and resizes accordingly.
            </p>
            <p class="list-item-detail">
              The <a href="index.php">Home</a> page uses a flexbox with the main axis of ‘row’ for the 
              information boxes. As you shrink the page, they become narrower (equally so). When the 
              page narrows enough, they will stack vertically.
            </p>
            <p class="list-item-detail">
              The <a href="sake-industry-news.php">Sake Industry News</a> page uses a simple flexbox 
              with the main axis of ‘column’.  Here also, as you shrink the page, the column becomes 
              narrower and the height of each item increases allowing the full content to continue 
              to be displayed.  
            </p>
            <p class="list-item-detail">
              The <a href="my-favorite-sake.php">My Favorite Sake</a> page uses flexbox with some 
              additional control/constraints. The data labels are given a fixed <code>flex-basis</code> and not 
              allowed to shrink or grow (<code>flex-grow:0;</code> and <code>flex-shrink:0</code>), maximizing
              space for the data. 
            </p>
          </div>

          <div class="requirements-list-item" >
            <p class="list-item-header">
              At least one instance of the canvas element
            </p>
            <p class="list-item-detail">
              On the <a href="bonus.php">Bonus</a> page, one of the tabs contains a canvas drawing.
            </p>
          </div>

          <div class="requirements-list-item" >
            <p class="list-item-header">
              At least one instance of the SVG element
            </p>
            <p class="list-item-detail">
              On the <a href="bonus.php">Bonus</a> page, one of the tabs contains an SVG drawing.
            </p>
            <p class="list-item-detail">
              On the <a href="contact.php">Contact</a> page, the social media icons are SVG (obtained
              from <a href="https://iconmonstr.com/">iconmonstr</a>).
            </p>
          </div>

          <div class="requirements-list-item" >
            <p class="list-item-header">
              An implementation of HTML5 form input validation
            </p>
            <p class="list-item-detail">
              The form on the <a href="contact.php">Contact</a> page uses HTML5 form input validation for the required fields and 
              format of the entered email address.
            </p>
          </div>

          <div class="requirements-list-item" >
            <p class="list-item-header">
              An implementation of JSON for data interchange
            </p>
            <p class="list-item-detail">
              On the <a href="my-favorite-sake.php">My Favorite Sake</a> page, the list of sake is retrieved 
              from the server in JSON format (an array). Also, when you click on a sake, the detail data is 
              retrieved from the server in JSON format.
            </p>
          </div>

          <div class="requirements-list-item" >
            <p class="list-item-header">
              An implementation of footer navigation
            </p>
            <p class="list-item-detail">
              All pages have an identical footer containing navigation and other miscellaneous items. 
            </p>
            <p class="list-item-detail">As a side note, this footer is contained in a separate PHP file (footer.php) and included 
              in each page. Thus, I only had to create it once and merely re-used across all pages.
            </p>
          </div>

          <div class="requirements-list-item" >
            <p class="list-item-header">
              An implementation of server-side persistent storage
            </p>
            <p class="list-item-detail">
              The sake data displayed on the <a href="my-favorite-sake.php">My Favorite Sake</a> page is 
              stored on the server in SQLite3. When the page loads, the list of sake is retrieved from 
              the SQLite3 database on the server and displayed. When you click on one of the sake, 
              details for that sake is retrieved from the SQLite database and displayed.
            </p>
          </div>

          <div class="requirements-list-item" >
            <p class="list-item-header">
              At least one implementation of data visualization
            </p>
            <p class="list-item-detail">
              One of the news items on the <a href="sake-industry-news.php">Sake Industry News</a> page talks about 
              the rice harvest being complete. If you click on the button titled ’10-Year Rice Production Chart’, 
              a chart showing the rice harvest volume for the past 10 years is displayed in a pop-up. 
            </p>
          </div>

          <div class="requirements-list-item" >
            <p class="list-item-header">
              An implementation of custom elements
            </p>
            <p class="list-item-detail">
              The <a href="pagespeed-insights.php">PageSpeed Insights</a> page uses a custom element to 
              display the performance score. If the performance criteria is met per project requirements, 
              a green thumbs-up is displayed. If the performance criteria is not met, a red thumbs-down 
              is displayed. The actual score is displayed within the thumbs-up / thumbs-down.
            </p>
            <p class="list-item-detail">
              This is a custom element that I created. It is used as follows:
            </p>
              <pre><code>          &lt;marius-psi mode="desktop" score="22" size="50"&gt;&lt;/marius-psi&gt; 
                  
              mode  is either 'desktop' or 'mobile' (different criteria apply)
              score is the PageSpeed insights score
              size  is the size (width and height as it only renders squares)
              </code></pre>
          </div>

          <div class="requirements-list-item" >
            <p class="list-item-header">
              An implementation of authentication
            </p>
            <p class="list-item-detail">
              On the <a href="bonus.php">Bonus</a> page on the Secret Page tab, there is a button 
              to log into a ‘secret’ page. If you enter the correct username and password, you are in. 
            </p>
          </div>

          <div class="requirements-list-item" >
            <p class="list-item-header">
              A package.json file for the project
            </p>
            <p class="list-item-detail">
              A <a href="package.json">package.json</a> file was created for the project
              and is located in the root directory of the project. 
            </p>
          </div>

          <div class="requirements-list-item" >
            <p class="list-item-header">
              A Credits section listing external resources used, links, and how they were used
            </p>
            <p class="list-item-detail">
              This information may be found on the <a href="credits-and-resources.php">Credits and Resources</a> page.
            </p>
          </div>

          <div class="requirements-list-item" >
            <p class="list-item-header">
              A project walkthrough illustrating the implementation of the project requirements
            </p>
            <p class="list-item-detail">
              That's this page!
            </p> 
          </div>   
 
           <div class="requirements-list-item" >
            <p class="list-item-header">
              PageSpeed Insights – score of at least 75% on mobile and 80% on desktop
            </p>
            <p class="list-item-detail">
              Page <a href="pagespeed-insights.php">PageSpeed Insights</a> lists the mobile and desktop 
              scores for each page plus links for each page to get current/dynamic scores directly from 
              PageSpeed Insights.
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
    <script src="js/project-walkthrough.js"></script>

  </body>
</html>
