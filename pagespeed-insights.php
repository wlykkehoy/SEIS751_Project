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
    
  <body  id="page-pagespeed-insights">
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
            <li class="breadcrumb-item active">PageSpeed Insights</li>
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
          <h1>PageSpeed Insights</h1>
          <p>
            PageSpeed Insights is a service provided by Google which reports on the performance 
            of a website page. For this project, we had the following criteria for each page:
            <br>
            Desktop: 80 or better
            <br>
            Mobile: 75 or better
          </p>
        </div>        

        <!-- A table with each page, it's score, and a link to 
             run PageSpeed Insights
        ------------------------------------------------------------ -->
        <div id="pagespeed-data">
          <table class="table " >
            <thead>
              <tr>
                <th scope="col">Page</th>
                <th scope="col">Desktop</th>
                <th scope="col">Mobile</th>
              </tr>
            </thead>
            
            <tbody>
              <tr>
                <th scope="row">Home</th>
                <td>
                  <marius-psi mode="desktop" score="100" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Findex.php&tab=desktop">
                    Run now...
                  </a>
                </td>
                <td>
                  <marius-psi mode="mobile" score="98" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Findex.php&tab=mobile">
                    Run now...
                  </a>
                </td>
              </tr>

              <tr>
                <th scope="row">How Sake is Made</th>
                <td>
                  <marius-psi mode="desktop" score="100" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fhow-sake-is-made.php&tab=desktop">
                    Run now...
                  </a>
                </td>
                <td>
                  <marius-psi mode="mobile" score="92" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fhow-sake-is-made.php&tab=mobile">
                    Run now...
                  </a>
                </td>
              </tr>

              <tr>
                <th scope="row">Sake Breweries</th>
                <td>
                  <marius-psi mode="desktop" score="95" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fsake-breweries.php&tab=desktop">
                    Run now...
                  </a>
                </td>
                <td>
                  <marius-psi mode="mobile" score="99" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fsake-breweries.php&tab=mobile">
                    Run now...
                  </a>
                </td>
              </tr>
              
              <tr>
                <th scope="row">My Favorite Sake</th>
                <td>
                  <marius-psi mode="desktop" score="99" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fmy-favorite-sake.php&tab=desktop">
                    Run now...
                  </a>
                </td>
                <td>
                  <marius-psi mode="mobile" score="98" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fmy-favorite-sake.php&tab=mobile">
                    Run now...
                  </a>
                </td>
              </tr>
              
              <tr>
                <th scope="row">Sake Industry News</th>
                <td>
                  <marius-psi mode="desktop" score="100" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fsake-industry-news.php&tab=desktop">
                    Run now...
                  </a>
                </td>
                <td>
                  <marius-psi mode="mobile" score="80" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fsake-industry-news.php&tab=mobile">
                    Run now...
                  </a>
                </td>
              </tr>
              
              <tr>
                <th scope="row">Content Map</th>
                <td>
                  <marius-psi mode="desktop" score="100" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fcontent-map.php&tab=desktop">
                    Run now...
                  </a>
                </td>
                <td>
                  <marius-psi mode="mobile" score="99" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fcontent-map.php&tab=mobile">
                    Run now...
                  </a>
                </td>
              </tr>
              
              <tr>
                <th scope="row">Wireframes</th>
                <td>
                  <marius-psi mode="desktop" score="89" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fwireframes.php&tab=desktop">
                    Run now...
                  </a>
                </td>
                <td>
                  <marius-psi mode="mobile" score="99" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fwireframes.php&tab=mobile">
                    Run now...
                  </a>
                </td>
              </tr>
              
              <tr>
                <th scope="row">Project Walkthrough</th>
                <td>
                  <marius-psi mode="desktop" score="99" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fproject-walkthrough.php&tab=desktop">
                    Run now...
                  </a>
                </td>
                <td>
                  <marius-psi mode="mobile" score="97" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fproject-walkthrough.php&tab=mobile">
                    Run now...
                  </a>
                </td>
              </tr>
              
              <tr>
                <th scope="row">PageSpeed Insights</th>
                <td>
                  <marius-psi mode="desktop" score="100" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fpagespeed-insights.php&tab=desktop">
                    Run now...
                  </a>
                </td>
                <td>
                  <marius-psi mode="mobile" score="97" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fpagespeed-insights.php&tab=mobile">
                    Run now...
                  </a>
                </td>
              </tr>
              
              <tr>
                <th scope="row">Credits and Resources</th>
                <td>
                  <marius-psi mode="desktop" score="99" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fcredits-and-resources.php&tab=desktop">
                    Run now...
                  </a>
                </td>
                <td>
                  <marius-psi mode="mobile" score="98" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fcredits-and-resources.php&tab=mobile">
                    Run now...
                  </a>
                </td>
              </tr>
              
              <tr>
                <th scope="row">Bonus</th>
                <td>
                  <marius-psi mode="desktop" score="100" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fbonus.php&tab=desktop">
                    Run now...
                  </a>
                </td>
                <td>
                  <marius-psi mode="mobile" score="100" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fbonus.php&tab=mobile">
                    Run now...
                  </a>
                </td>
              </tr>
              
              <tr>
                <th scope="row">Contact</th>
                <td>
                  <marius-psi mode="desktop" score="100" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fcontact.php&tab=desktop">
                    Run now...
                  </a>
                </td>
                <td>
                  <marius-psi mode="mobile" score="99" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fcontact.php&tab=mobile">
                    Run now...
                  </a>
                </td>
              </tr>
              
              <tr>
                <th scope="row">Secret Page</th>
                <td>
                  <marius-psi mode="desktop" score="100" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fsecret-page.php&tab=desktop">
                    Run now...
                  </a>
                </td>
                <td>
                  <marius-psi mode="mobile" score="98" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2Fsecret-page.php&tab=mobile">
                    Run now...
                  </a>
                </td>
              </tr>

              <tr>
                <th scope="row">404 Page</th>
                <td>
                  <marius-psi mode="desktop" score="100" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2F404.php&tab=desktop">
                    Run now...
                  </a>
                </td>
                <td>
                  <marius-psi mode="mobile" score="98" size="50"></marius-psi>
                  <br>
                  <a target="_blank" href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~lykk3260%2Fproject%2F404.php&tab=mobile">
                    Run now...
                  </a>
                </td>
              </tr>
              
              <tr>
                <th scope="row">ford.com (to show fail condition <br> for &lt;marius-psi&gt;)</th>
                <td>
                  <marius-psi mode="desktop" score="58" size="50"></marius-psi>
                  <br>
                  <a href="https://developers.google.com/speed/pagespeed/insights/?url=ford.com&tab=desktop">
                    Run now...
                  </a>
                </td>
                <td><marius-psi mode="mobile" score="15" size="50"></marius-psi>
                  <br>
                  <a href="https://developers.google.com/speed/pagespeed/insights/?url=ford.com&tab=mobile">
                    Run now...
                  </a>
                  </td>
              </tr>

            </tbody>
          </table>
        </div>

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
    <script src="js/marius-psi.js"></script>
    <script src="js/pagespeed-insights.js"></script>


  </body>
</html>
