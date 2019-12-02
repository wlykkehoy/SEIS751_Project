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
    
  <body  id="page-credits">
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
            <li class="breadcrumb-item active">Credits</li>
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
          <h1>Credits and Resources</h1>
          <p>
            Being new to website related technologies, I pulled on a <em>lot</em> 
            of resources. Here are the ones I found most useful. Plus acknowledgements 
            for resources from which I ‘leveraged’ content.
          </p>
        </div>        

        <!-- List of Credits & Resources
             Note the list is broken up into sections/categories, each
             section/category has a header.
        ------------------------------------------------------------ -->
        <!-- overall container for the list -->
        <div id="credits-list">      
          
          <!-- the "Content" section/category and items  -->
          <div class="credits-list-section">
            <div class="credits-list-header">
              Content
            </div>
            
            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                Science Channel
              </p>
              <p class="credits-list-item-detail">
                The video on how sake is made was downloaded from the Science Channel’s YouTube channel.
              </p>
              <div class="credits-list-item-footer">
                <a href="https://www.sciencechannel.com/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>
            
            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                Vine Connections
              </p>
              <p class="credits-list-item-detail">
                Vine Connections is an importer of Japanese Sake into the US. They have Sake 
                data for use by retailers on their website. Some of this data found its way 
                into my database for display on the My Favorite Sake page.
              </p>
              <div class="credits-list-item-footer">
                <a href="http://www.vineconnections.com/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>
            
            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                Sake on Air
              </p>
              <p class="credits-list-item-detail">
                A podcast devoted entirely to Sake and the Sake industry. One of the episodes 
                is on my Sake Industry News page.
              </p>
              <div class="credits-list-item-footer">
                <a href="https://sakeonair.com/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>
            
            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                Smith Honig
              </p>
              <p class="credits-list-item-detail">
                Interior design site where I found an article titled “37 Color Palettes 
                Inspired by Japan”. One of them I used for this project.
              </p>
              <div class="credits-list-item-footer">
                <a href="https://smithhonig.com/color-palettes-inspired-by-japan-japanese-color-palettes/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                tenor
              </p>
              <p class="credits-list-item-detail">
                A company entirely focused on communicating via GIFs. Now owned by Google. 
                This is where I found the dancing alien GIF featured on the “secret” page. 
              </p>
              <div class="credits-list-item-footer">
                <a href="https://tenor.com">
                  Learn more about this resource >>
                </a>
              </div>
            </div>
          </div>   <!-- end of the "Content" section/category and items  --> 

          <!-- the "Tutorials and References" section/category and items  -->
          <div>
            <div class="credits-list-header">
              Tutorials and References
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                Visual QuickStart Guide – HTML and CSS 
              </p>
              <p class="credits-list-item-detail">
                This is a great book (available in PDF!) for those with very little to no prior exposure to 
                HTML and CSS (like me). It does a great job walking you through functionality and features 
                with simple and easy to follow examples (which by the way are available online). And includes 
                many “tips and tricks” which I found very helpful.  
              </p>
              <div class="credits-list-item-footer">
                <a href="http://www.peachpit.com/store/html-and-css-visual-quickstart-guide-9780321928832">
                  Learn more about this resource >>
                </a>
              </div>
            </div>
 
            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                w3schools.com tutorials
              </p>
              <p class="credits-list-item-detail">
                Although they have been criticized in the past for having out of date or incorrect information, 
                I found them to be more up to date than many other resources I looked at. Their tutorials are 
                easy to understand and follow. I really like their “Try it Yourself” feature that pops sample 
                code open in an editor where you can tinker with it and see the result. I found the Bootstrap 
                tutorial and PHP tutorial immensely helpful.  
              </p>
              <div class="credits-list-item-footer">
                <a href="https://www.w3schools.com/default.asp">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                Mozilla Developer Network (MDN)
              </p>
              <p class="credits-list-item-detail">
                This became my primary go-to for the definitive (and up to date) reference for all things 
                client-side web technology related (HTML5 / CSS3 / JavaScript / canvas / SVG).  They have 
                great simple examples that you can edit and tinker with, seeing immediate changes. While 
                there are several tutorials, I found the w3cschools ones better.  
              </p>
              <div class="credits-list-item-footer">
                <a href="https://developer.mozilla.org/en-US/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                A re-introduction to JavaScript (JS tutorial)
              </p>
              <p class="credits-list-item-detail">
                If you are familiar with other programming languages based on C or Java, you really don’t need 
                a JavaScript tutorial that explains the concept of variables, how an if-then statement works, 
                etc. You need a concise and brief overview of the language with examples showing the syntax. 
                This resource give you just that!  It is part of the Mozilla Developer Network.  
              </p>
              <div class="credits-list-item-footer">
                <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/A_re-introduction_to_JavaScript">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                DOM Enlightenment
              </p>
              <p class="credits-list-item-detail">
                This is an O’Reilly book (online pre-edited/draft version is free) that covers the DOM and working 
                with it in JavaScript. Easy to understand and follow. Is quite extensive. It also has great examples
                that you can directly pop up in JSFiddle to explore and tinker with.  
              </p>
              <div class="credits-list-item-footer">
                <a href="http://domenlightenment.com/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                jQuery Fundamentals
              </p>
              <p class="credits-list-item-detail">
                This online tutorial walks you through jQuery in an easy to understand and concise manner. I liked 
                their sandbox feature that allowed you to tinker and experiment with the presented examples. I 
                highly recommend for anyone learning jQuery.  
              </p>
              <div class="credits-list-item-footer">
                <a href="http://jqfundamentals.com/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                Learning PHP, MySQL & JavaScript
              </p>
              <p class="credits-list-item-detail">
                This book was recommended by Marius. I found it to be a nice complement to the other tutorials above. 
                It covered a broader range of topics and helped “fit them together”.  
              </p>
              <div class="credits-list-item-footer">
                <a href="http://shop.oreilly.com/product/0636920036463.do">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                SVG Tutorial by Jenkov.com
              </p>
              <p class="credits-list-item-detail">
                I found the SVG tutorial on w3schools to be lacking the more advanced aspects, including animation 
                and transformations. I found this tutorial to be a nice compliment and provide more detail and 
                advanced usage. The examples were easy to follow and understand. Each section has an accompanying 
                video explaining the topic.  
              </p>
              <div class="credits-list-item-footer">
                <a href="http://tutorials.jenkov.com/svg/index.html">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                The Modern JavaScript Tutorial
              </p>
              <p class="credits-list-item-detail">
                This tutorial has several parts/sections. From a very gentle introduction to JavaScript to more 
                advanced topics such as the DOM, making network requests, animation, etc. I found it a nice 
                complement for specific topics.  
              </p>
              <div class="credits-list-item-footer">
                <a href="https://javascript.info/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                HTML5Rocks
              </p>
              <p class="credits-list-item-detail">
                Although it is a bit out of date (has some deprecated items), I found this to be a concise resource 
                for seeing what is possible with features of HTML5 and CSS3.   
              </p>
              <div class="credits-list-item-footer">
                <a href="http://linux2.gps.stthomas.edu/~mntegomoh/slides.html5rocks.com/html5.html#title-slide">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                Google Charts Tutorials and Reference
              </p>
              <p class="credits-list-item-detail">
                I relied on Google’s online documentation for Google Charts. It was easy to follow and contained 
                concise examples for each chart type. My only complaint was I found the reference information 
                for the myriad of configuration options for each chart to be lacking examples.  
              </p>
              <div class="credits-list-item-footer">
                <a href="https://developers.google.com/chart/interactive/docs">
                  Learn more about this resource >>
                </a>
              </div>
            </div>
 
            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                jQuery API Documentation
              </p>
              <p class="credits-list-item-detail">
                The official jQuery API Documentation site became my go-to for jQuery. Easy to find what you are 
                looking for. And contains concise information with simple examples.  
              </p>
              <div class="credits-list-item-footer">
                <a href="https://api.jquery.com/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>
 
            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                PHP Manual
              </p>
              <p class="credits-list-item-detail">
                This is the official PHP documentation site. Was my go-to for the definitive word on anything PHP 
                related. I particularly liked the user contributed notes. Often they contain great tips/tricks. 
                And there is an entire section on SQLite3 ala PHP!  
              </p>
              <div class="credits-list-item-footer">
                <a href="https://www.php.net/manual/en/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                CSS-TRICKS
              </p>
              <p class="credits-list-item-detail">
                CSS-TRICKS is a site with many articles and how-to guides. This became my first go-to for clear 
                and concise information on how certain features of HTML/CSS/JavaScript work. This is where I 
                found a great, simple to understand article on how to build a custom web component.
              </p>
              <div class="credits-list-item-footer">
                <a href="https://css-tricks.com/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>
          </div>     <!-- end of the "Tutorials and References" section/category and items -->

          <!-- the "Libraries" section/category and items  -->
          <div>
            <div class="credits-list-header">
              Libraries
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                Bootstrap
              </p>
              <p class="credits-list-item-detail">
                I used Bootstrap throughout the project. It bakes responsive design right into your pages. 
                And provides components and styling aids that take at least some of that tedious work off 
                your plate. Though there is still plenty of CSS left to do yourself!  
              </p>
              <div class="credits-list-item-footer">
                <a href="https://getbootstrap.com/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>
 
            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                Google Charts
              </p>
              <p class="credits-list-item-detail">
                I used Google Charts for the chart in the project. I found it easy to use. The on-line 
                documentation had great examples that you could literally cut and paste. A very extensive 
                and robust charting library.  
              </p>
              <div class="credits-list-item-footer">
                <a href="https://developers.google.com/chart">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                dafont.com
              </p>
              <p class="credits-list-item-detail">
                The brush-stroke web font I use is from dafont.com. I found different and unique 
                fonts here vs on Google Fonts site.  
              </p>
              <div class="credits-list-item-footer">
                <a href="https://www.dafont.com/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                iconmonstr
              </p>
              <p class="credits-list-item-detail">
                SVG icons galore! The social media icons I use on my Contact page are from iconmonstr.  
              </p>
              <div class="credits-list-item-footer">
                <a href="https://iconmonstr.com/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                Webcomponetns.org
              </p>
              <p class="credits-list-item-detail">
                This is a resource that was at the same time helpful and frustrating. It is a library 
                of 3rd party developed Web Components. On the helpful side, I got a good understanding 
                from browsing through the components what the Web Component concept was about and what 
                could be done with it. On the frustrating side, I found many (nearly all that I looked 
                at actually) use deprecated features of HTML5. Thus they will not work in all browsers 
                today and in February 2020 will not work in Chrome. This is when/where I started looking 
                for information on how to build my own.  
              </p>
              <div class="credits-list-item-footer">
                <a href="https://www.webcomponents.org/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>
          </div>     <!-- end of the "Libraries" section/category and items -->

          <!-- the "Tools" section/category and items  -->
          <div>
            <div class="credits-list-header">
              Tools
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                Chrome Browser Developer Tools
              </p>
              <p class="credits-list-item-detail">
                I especially appreciated and came to rely a lot on the developer tools. Both for seeing 
                what CSS was applied to elements, especially positioning / margins / borders. And for 
                debugging JavaScript. And great for dissecting and understanding other websites.  
              </p>
              <div class="credits-list-item-footer">
                <a href="https://developers.google.com/web/tools/chrome-devtools">
                  Learn more about this resource >>
                </a>
              </div>
            </div>
 
            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                AWS Cloud9
              </p>
              <p class="credits-list-item-detail">
                I used the Amazon AWS cloud-based IDE Cloud9 as my IDE/editor. I can’t speak highly 
                enough of it. I would have struggled without its language based color coding and 
                syntax help! And it has built-in CSS validation, which was a big help.   
              </p>
              <div class="credits-list-item-footer">
                <a href="https://aws.amazon.com/cloud9/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                git / GitHub
              </p>
              <p class="credits-list-item-detail">
                I used git and GitHub as a source control tool to keep versions of my code. Great 
                when you are coding along trying something, find that does not work, and can 
                revert back to a previous version.  
              </p>
              <div class="credits-list-item-footer">
                <a href="https://git-scm.com/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                SQLite3
              </p>
              <p class="credits-list-item-detail">
                A great little database engine. And the best part is there is no setup or servers. 
                And great support in PHP.  I stored the Sake data in a SQLite3 database.  
              </p>
              <div class="credits-list-item-footer">
                <a href="https://www.sqlite.org/index.html">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                DB Browser for SQLite
              </p>
              <p class="credits-list-item-detail">
                DB Browser is a GUI browser / admin tool for SQLite. For the SQLite3 database of Sake 
                data, I used this tool to import data from Excel into the database. Did a bit of 
                structural tweaking and cleanup. Then was able to copy the database file up to the 
                Linux server and start querying away. Saved me a lot of time with respect to using 
                SQL commands to create and populate the data!  
              </p>
              <div class="credits-list-item-footer">
                <a href="https://sqlitebrowser.org/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                JSFiddle
              </p>
              <p class="credits-list-item-detail">
                This is one of the most handy tools I have come across. It allows you to tinker with 
                snippets of HTML, CSS, and JavaScript and immediately see the result plus any console 
                messages from the JavaScript. You can “switch on” various libraries such as jQuery. I 
                used it a lot when researching various topics and found code snippets. Just pasted the 
                example HTML / CSS / JavsScript in, ran it, saw the result, and could tinker with it 
                before putting into my project.  
              </p>
              <div class="credits-list-item-footer">
                <a href="https://jsfiddle.net/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                HTML Tree Generator
              </p>
              <p class="credits-list-item-detail">
                I found this tool when I was searching for a way to visually see the DOM structure of 
                my page. It presents a graphical tree-like representation of the DOM for the page you 
                are viewing. This was very useful for double-check that I created the structure that 
                I intended. And also for identifying unnecessary structure (don’t usually need immediately 
                nested &lt;div&gt; elements  ).  
              </p>
              <div class="credits-list-item-footer">
                <a href="https://chrome.google.com/webstore/detail/html-tree-generator/dlbbmhhaadfnbbdnjalilhdakfmiffeg">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                GNU Image Manipulation Tool (GIMP)
              </p>
              <p class="credits-list-item-detail">
                An awesome tool for editing images. I used it primarily for collecting x/y coordinates 
                from drawings that I rendered in via canvas and SVG drawings.  
              </p>
              <div class="credits-list-item-footer">
                <a href="https://www.gimp.org/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                Microsoft Paintbrush
              </p>
              <p class="credits-list-item-detail">
                The quickest and easiest way to resize images (at least for me)!  
              </p>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                Favicon Generator
              </p>
              <p class="credits-list-item-detail">
                I used this favicon generator to create the Sake favicon used in my website.  
              </p>
              <div class="credits-list-item-footer">
                <a href="https://www.favicon-generator.org/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                Lorem Ipsum Generator
              </p>
              <p class="credits-list-item-detail">
                A great way to quickly create place holder text as you are working on layout.   
              </p>
              <div class="credits-list-item-footer">
                <a href="https://loremipsum.io/generator/?n=2&t=p">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                PlaceHolder.com
              </p>
              <p class="credits-list-item-detail">
                What do you do when you are working on a page where you will have one or more images 
                but do not yet have the images? Pop in placeholders! PlaceHolder.com provides on-line 
                dynamically generated images (they actually are SVG) of any size you want.   
              </p>
              <div class="credits-list-item-footer">
                <a href="https://placeholder.com/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                ColorZilla
              </p>
              <p class="credits-list-item-detail">
                This is a Chrome plug-in that allows you to point to a color on the web page you 
                are viewing and get the color value. I used this to extract colors for my color 
                pallet from a home décor/decorating site.  
              </p>
              <div class="credits-list-item-footer">
                <a href="https://www.colorzilla.com/chrome/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>
 
            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                Box-shadow Generator
              </p>
              <p class="credits-list-item-detail">
                This is a Mozilla Developer Network tool for interactively creating box shadows. 
                I used this to create a box shadow around the name of the brewery that displays 
                in the carousel of brewer pictures (on the Sake Breweries page). A lot faster 
                than making a guess, key it into the CSS, try it, repeat 1000 times!  
              </p>
              <div class="credits-list-item-footer">
                <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Background_and_Borders/Box-shadow_generator">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

            <div class="credits-list-item" >
              <p class="credits-list-item-header">
                PageSpeed Insights
              </p>
              <p class="credits-list-item-detail">
                A great online tool for analyzing a web page’s performance, providing an overall 
                “score”, and making suggestions how to make it faster. Overall scores for each 
                page on this site may be found on the <a href="pagespeed-insights.php">PageSpeed Insights</a> page.
              </p>
              <div class="credits-list-item-footer">
                <a href="https://developers.google.com/speed/pagespeed/insights/">
                  Learn more about this resource >>
                </a>
              </div>
            </div>

          </div>     <!-- end of the "Tools" section/category and items -->

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
    <script src="js/credits-and-resources.js"></script>

  </body>
</html>
