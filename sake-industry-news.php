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
    
  <body  id="page-sake-industry-news">
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
            <li class="breadcrumb-item active">Sake Industry News</li>
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
          <h1>Sake Industry News</h1>
          <p>
            The latest news from the Sake industry...
          </p>
        </div>        

        <!-- News articles
        ------------------------------------------------------------ -->
        <div id="news-list">
          <div class="media">
            <img src="img/news-thumbnails/news_009.jpg" class="mr-3" alt="Image of sake fermeting">
            <div class="media-body">
              <h5 class="mt-0">First batches of 2019 season nearing completion <span class="publish-date">Nov 5, 2019</span></h5>
              The first batches of Sake for the 2019 season are nearly ready for pressing. Head brewer, 
              Mr Yamagato of the Umami brewery, commented that early indications are the 2019 season is 
              expected to be a good one.    
              <div class="footer"><a href="#">Read more >></a></div>
            </div>
          </div>
  
          <div class="media">
            <img src="img/news-thumbnails/news_008.jpg" class="mr-3" alt="Image of podcast logo">
            <div class="media-body">
              <h5 class="mt-0">First batches of 2019 season nearing completion <span class="publish-date">Oct 14, 2019</span></h5>
              The latest episode of Sake on Air is now available. This episode focuses on koji. What is it? 
              Where does it come from? What does it do? Why should you care? Listen now…  
              <audio controls src="media/23_koji.mp3">Your browser does not support audio.</audio>
            </div>
          </div>
  
          <div class="media">
            <img src="img/news-thumbnails/news_007.jpg" class="mr-3" alt="Image of person cleaning container">
            <div class="media-body">
              <h5 class="mt-0">Brewing season starts <span class="publish-date">Oct 1, 2019</span></h5>
              Sake breweries across Japan are getting a good scrubbing down and cleaning as the Sake brewing 
              season officially starts today.              
              <div class="footer"><a href="#">Read more >></a></div>
            </div>
          </div>
  
          <div class="media">
            <img src="img/news-thumbnails/news_006.jpg" class="mr-3" alt="Image of rice being bagged">
            <div class="media-body">
              <h5 class="mt-0">Rice harvest complete <span class="publish-date">Sept 30, 2019</span></h5>
              The last of the 2019 rice is now in. Yields varied across Japan, with the total quantity
              slightly down from 2018.
              <p>
                <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#rice-prod-modal">
                  10-Year Rice Production Chart
                </button>
              </p>
            </div>
          </div>
  
          <div class="media">
            <img src="img/news-thumbnails/news_005.jpg" class="mr-3" alt="Image of test tube">
            <div class="media-body">
              <h5 class="mt-0">New yeast strain released <span class="publish-date">Sept 21, 2019</span></h5>
              The Japan Yeast Society has released a new strain just in time for the 2019 sake brewing season. 
              The yeast was isolated from cultures collected in the Nihon valley. Expectations are that it 
              will produce a light and floral Sake.            
              <div class="footer"><a href="#">Read more >></a></div>
            </div>
          </div>
  
          <div class="media">
            <img src="img/news-thumbnails/news_004.jpg" class="mr-3" alt="Image of rice being harvested">
            <div class="media-body">
              <h5 class="mt-0">Rice harvest is underway <span class="publish-date">Sept 12, 2019</span></h5>
              Rice harvest across Japan has been in full swing for a couple of weeks. Early indications 
              are a quality crop with large kernels. Should be excellent for making sake.            
              <div class="footer"><a href="#">Read more >></a></div>
            </div>
          </div>
  
          <div class="media">
            <img src="img/news-thumbnails/news_003.jpg" class="mr-3" alt="Image of sake bottles">
            <div class="media-body">
              <h5 class="mt-0">First of the 2018 sake released <span class="publish-date">Sept 2, 2019</span></h5>
              The first of the 2018 brewing season is now hitting store shelves. Having sampled a view of my 
              favorite breweries Sake, I would say 2018 was an excellent year. The ginjo and di-ginjo Sake 
              will start to be released over the next few weeks.            
              <div class="footer"><a href="#">Read more >></a></div>
            </div>
          </div>
  
          <div class="media">
            <img src="img/news-thumbnails/news_002.jpg" class="mr-3" alt="Image of polished rice grains">
            <div class="media-body">
              <h5 class="mt-0">Sake made from rice milled to 1% seimaibuai <span class="publish-date">Aug 17, 2019</span></h5>
              Sake made from rice milled to 1% seimaibuai - is that even possible? One brewer has done just that. 
              I got a chance to chat with Mr. Ogasaki of the Jumai brewery to learn more.            
              <div class="footer"><a href="#">Read more >></a></div>
            </div>
          </div>
  
          <div class="media">
            <img src="img/news-thumbnails/news_001.jpg" class="mr-3" alt="Image of sake bottles">
            <div class="media-body">
              <h5 class="mt-0">National New Sake Competition results <span class="publish-date">Aug 5, 2019</span></h5>
              The annual National New Sake Competition was held last week in Tokyo. Of the 857 entries, there 
              were 237 gold medals awarded and 179 silver medals awarded. Some of the gold medals went to 
              some young up-and-coming brewers.            
              <div class="footer"><a href="#">Read more >></a></div>
            </div>
          </div>
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
        MODAL POP-UP FOR CHART OF RICE PRODUCTION
        
        Put way down here as it is not in the page proper; it is
        rendered when the modal dialog is popped-up
     ============================================================ -->
    <div class="modal fade" id="rice-prod-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="rice-prod-modal-label">10-Year Sake Rice Production</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="rice-prod-modal_chart_div"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


    <!-- ===========================================================
        SCRIPTS GO WAY DOWN HERE AT THE BOTTOM
    ============================================================ -->    

    <!-- JS for jQuery (required by Bootstrap & I use directly also; must come before Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- JS for Bootstrap; note jQuery must come before -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- JS for Google Charts -->
    <script src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- My JS - very last -->
    <script src="js/sake-industry-news.js"></script>

  </body>
</html>
