/* ============================================================
    This JavaScript is for the wireframes.php page
============================================================ */
"use strict";


/* This function fires when the page is loaded. 
  ------------------------------------------------------------ */
$(function() {
  
  /* set the navbar item for the Home page to active */
  $("#nav-link-about").addClass("active");
  $("#nav-dropdown-wireframes").addClass("active");


  /* set the height of the wireframe display area to be the same
     as the list of pages */
  var hgt = $("#wireframes-list").height();
  $("#wireframes").height(hgt);

});


