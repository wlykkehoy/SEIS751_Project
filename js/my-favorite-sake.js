/* ============================================================
    This JavaScript is for the my-favorite-sake.php page
============================================================ */
"use strict";


/* This function fires when the page is loaded. 
  ------------------------------------------------------------ */
$(function() {

  /* set the navbar item for the Home page to active */
  $("#nav-link-featured").addClass("active");
  $("#nav-dropdown-my-favorite-sake").addClass("active");


  /* enable Bootstrap popovers */
  $(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
  });


  /* fetch the list of sake from the server and populate the list */
  $.getJSON("http-request-handlers/get-sake-list.php", function(resp) {
/*    console.log(resp); */
    var idx;
    var item;
    for (idx = 0; idx < resp.length; idx++) { 
      item = '<button type="button" class="list-group-item list-group-item-action">' + resp[idx] + '</button>';
      $("#sake-list").append(item);
    }
  });


  /* Add an event handler to the list that fires when a  list item is clicked */
  $("#sake-list").click(displaySakeDetail);

});
 
  
 
/* This is the event handler for when an individual sake's
   button is clicked. It marks the selected item with class "active"
   so the CSS can do it's thing and retrieves the details from the
   server and populates the fields (elements) on screen.
  ------------------------------------------------------------ */
function displaySakeDetail(event) {

  event.preventDefault(); 

  $("#page-my-favorite-sake button.list-group-item").removeClass("active");
  $(event.target).addClass("active");

  /* for the selected sake, retrieve info from the server */
  var data = {"sakeNameToLookup": event.target.innerHTML};
  $.getJSON("http-request-handlers/get-sake-details.php", data, function(resp) {
    $("#fld-name").html(resp.name);
    $("#fld-grade").html(resp.grade);
    $("#fld-overview").html(resp.overview);
    $("#fld-tasting-notes").html(resp.tasting_notes);
    $("#fld-food-pairing").html(resp.food_pairing);
    $("#fld-rice").html(resp.rice);
    $("#fld-seimaibuai").html(resp.seimaibuai + "%");
    $("#fld-brewery-name").html(resp.brewery_name);
    $("#fld-brewery-location").html(resp.brewery_location);
  });
};


  

function dumpEventInfo (event) {
  var ele;
  console.log("*** " + event.type + " ***");
  ele = event.target;
  console.log("  target: nodeType = " + ele.nodeType + "  nodeName = " + ele.nodeName + "   nodeValue = " + ele.nodeValue);

  ele = event.currentTarget;
  console.log("  currentTarget: nodeType = " + ele.nodeType + "  nodeName = " + ele.nodeName + "   nodeValue = " + ele.nodeValue);
  console.log("  bubbles: ", + event.bubbles);
};


