/* ============================================================
    This code retrieves the list of sake from the server
    and displays it.
============================================================ */


/* This function fires when the page is loaded. It merely
   gets the list of sake from the server and creates buttons
   for each of the sake. 
  ------------------------------------------------------------ */
$(function() {

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
  


  /* automatically select the first one */
/* seems is not yet defined 
  var buttons = $(".sake-list-item");
  var firstSake = buttons[0];
    console.log(buttons);
  console.log(firstSake);
*/  
/*
  firstSake.button('toggle');
*/  

});
  
 
/* This is the event handler for when an individual sake's
   button is clicked. It retrieves the details from the
   server and populates the fields (elements) on screen.
  ------------------------------------------------------------ */
function displaySakeDetail(event) {

  console.log("==> " + event.target.innerHTML); 

  event.preventDefault(); 

  /* for the selected sake, retrieve info from the server */
/* !!!!!!!! need to send the name of the selectes sake !!!!!! */  
  $.getJSON("http-request-handlers/get-sake-details.php", function(resp) {
/*    console.log(resp); */
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


