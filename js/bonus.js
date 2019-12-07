/* ============================================================
    This JavaScript is for the bonus.php page
============================================================ */
"use strict";



/* Some global variables for positioning the SVG drawing
  ------------------------------------------------------------ */
var svgZoom = 1;
var svgXPos = 0;
var svgYPos = 0;


/* Stuff to do after the page loads
  ------------------------------------------------------------ */
$(function() {
  
  /* set the navbar item for the Home page to active */
  $("#nav-link-bonus").addClass("active");


  /* Set event handler to render canvas drawing when it's tab is shown */
  $("a[href='#nav-canvas-drawing']").on("shown.bs.tab", drawCanvas);
  

  /* Set event handlers for the SVG drawing pan/zoom/reset buttons */
  $("#btn-svg-pan-left").click(svgPanLeft);
  $("#btn-svg-pan-right").click(svgPanRight);
  $("#btn-svg-pan-up").click(svgPanUp);
  $("#btn-svg-pan-down").click(svgPanDown);
  $("#btn-svg-zoom-in").click(svgZoomIn);
  $("#btn-svg-zoom-out").click(svgZoomOut);
  $("#btn-svg-reset").click(svgReset);


  /* Set event handler to initialize the jQuery animation stuffs when the tab 
     is shown and the handler for when the clicks on the box which starts
     the animation */
  $("a[href='#nav-jq-animation']").on("shown.bs.tab", initJQAnimation);
  $("#jq-animation-box").click(doJQAnimation);
  

  /* Was hoping I would get a 'shown.bs.tab' event on page load for the 
     initial tab being displayed; but I don't. So, here we will 'assume'
     the canvas drawing tab is first in the HTML and display it's 
     generated content. */
  drawCanvas();

});


/* Functions to handle manipulating the SVG drawing
  ------------------------------------------------------------ */
function transformString() {
  var attrString = "translate(" + svgXPos + "," + svgYPos + ")";
  attrString += " scale(" + svgZoom + ")";
  return attrString;
}

function svgPanLeft() {
  svgXPos += 10;
  $("#svg-origami-drawing").attr("transform", transformString());
}

function svgPanRight() {
  svgXPos -= 10;
  $("#svg-origami-drawing").attr("transform", transformString());
}

function svgPanUp() {
  svgYPos += 10;
  $("#svg-origami-drawing").attr("transform", transformString());
}

function svgPanDown() {
  svgYPos -= 10;
  $("#svg-origami-drawing").attr("transform", transformString());
}

function svgZoomIn() {
  svgZoom *= 1.1;
  $("#svg-origami-drawing").attr("transform", transformString());
}

function svgZoomOut() {
  svgZoom *= 0.9;
  $("#svg-origami-drawing").attr("transform", transformString());
}

function svgReset() {
  svgZoom = 1;
  svgXPos = 0;
  svgYPos = 0;
  $("#svg-origami-drawing").attr("transform", transformString());
}



/* Function to draw/render the canvas images
  ------------------------------------------------------------ */
function drawCanvas() {
    var ctx = document.getElementById("canvas-drawing").getContext("2d");

    /* the flag 
    -------------------------------------------------*/
    ctx.save();
    ctx.transform(1, 0, 0, 1, 10, 10);      /* makes tweaking placement and size easier */

    ctx.lineWidth = 0.5;
    ctx.strokeStyle = "black";
    ctx.strokeRect(0, 0, 150, 100);
    
    ctx.strokeStyle = "red";
    ctx.fillStyle = "red";
    ctx.beginPath();
    ctx.arc(75, 50, 30, 0, (2 * Math.PI));
    ctx.fill();

    ctx.restore();

    
    /* a pagoda 
    -------------------------------------------------*/
    ctx.save();
    ctx.transform(1, 0, 0, 1, 260, 120);      /* makes tweaking placement and size easier */

    ctx.fillStyle = "black";
    ctx.fillRect(0, 275, 130, 5);
    
    ctx.fillStyle = "yellow";
    ctx.fillRect(40, 250, 50, 25);

    ctx.fillStyle = "red";
    ctx.beginPath();
    ctx.moveTo(15,  260);
    ctx.lineTo(40,  250);
    ctx.lineTo(90,  250);
    ctx.lineTo(115, 260);
    ctx.lineTo(90,  225);
    ctx.lineTo(40,  225);
    ctx.fill();

    ctx.fillStyle = "yellow";
    ctx.fillRect(40, (250 - 50), 50, 25);

    ctx.fillStyle = "red";
    ctx.beginPath();
    ctx.moveTo(15,  (260 - 50));
    ctx.lineTo(40,  (250 - 50));
    ctx.lineTo(90,  (250 - 50));
    ctx.lineTo(115, (260 - 50));
    ctx.lineTo(90,  (225 - 50));
    ctx.lineTo(40,  (225 - 50));
    ctx.fill();
    
    ctx.fillStyle = "yellow";
    ctx.fillRect(40, (250 - 100), 50, 25);

    ctx.fillStyle = "red";
    ctx.beginPath();
    ctx.moveTo(15,  (260 - 100));
    ctx.lineTo(40,  (250 - 100));
    ctx.lineTo(90,  (250 - 100));
    ctx.lineTo(115, (260 - 100));
    ctx.lineTo(90,  (225 - 100));
    ctx.lineTo(40,  (225 - 100));
    ctx.fill();

    ctx.fillStyle = "yellow";
    ctx.fillRect(40, (250 - 150), 50, 25);

    ctx.fillStyle = "red";
    ctx.beginPath();
    ctx.moveTo(15,  (260 - 150));
    ctx.lineTo(40,  (250 - 150));
    ctx.lineTo(90,  (250 - 150));
    ctx.lineTo(115, (260 - 150));
    ctx.lineTo(90,  (225 - 150));
    ctx.lineTo(40,  (225 - 150));
    ctx.fill();

    ctx.fillStyle = "yellow";
    ctx.fillRect(40, (250 - 200), 50, 25);

    ctx.fillStyle = "red";
    ctx.beginPath();
    ctx.moveTo(15,  (260 - 200));
    ctx.lineTo(40,  (250 - 200));
    ctx.lineTo(90,  (250 - 200));
    ctx.lineTo(115, (260 - 200));
    ctx.lineTo(65,  (225 - 225));
    ctx.fill();
   
    ctx.fillStyle = "black";
    ctx.fillRect(60, 260, 10, 15);
    ctx.fillRect(45, 255, 5, 5);
    ctx.fillRect(45, (255 - 50), 5, 5);
    ctx.fillRect(45, (255 - 100), 5, 5);
    ctx.fillRect(45, (255 - 150), 5, 5);
    ctx.fillRect(45, (255 - 200), 5, 5);
    ctx.fillRect(80, 255, 5, 5);
    ctx.fillRect(80, (255 - 50), 5, 5);
    ctx.fillRect(80, (255 - 100), 5, 5);
    ctx.fillRect(80, (255 - 150), 5, 5);
    ctx.fillRect(80, (255 - 200), 5, 5);

    ctx.restore();


    /* the sake character 
    -------------------------------------------------*/
    ctx.save();
    ctx.transform(.3, 0, 0, .3, 75, 200);      /* makes tweaking placement and size easier */

    ctx.lineWidth =  20.0;
    ctx.strokeStyle = "black";
    ctx.lineCap = "round";
    ctx.beginPath();
    ctx.moveTo(10, 0);
    ctx.lineTo(70, 50);
    ctx.moveTo(0, 80);
    ctx.lineTo(55, 130);
    ctx.moveTo(60, 165);
    ctx.lineTo(5, 325);
    ctx.moveTo(80, 5);
    ctx.lineTo(335, 5);
    ctx.moveTo(170, 10);
    ctx.lineTo(170, 110);
    ctx.lineTo(135, 190);
    ctx.moveTo(235, 10);
    ctx.lineTo(235, 170);
    ctx.lineTo(305, 170);
    ctx.moveTo(105, 310);
    ctx.lineTo(105, 80);
    ctx.lineTo(305, 80);
    ctx.lineTo(305, 310);
    ctx.moveTo(105, 225);
    ctx.lineTo(305, 225);
    ctx.moveTo(105, 280);
    ctx.lineTo(305, 280); 
    ctx.stroke();
    ctx.beginPath();
    ctx.arc(168, 163, 280, 0, (2 * Math.PI));
    ctx.stroke();

    ctx.restore();


    /* and some text just for fun 
    -------------------------------------------------*/
    ctx.save();
    ctx.translate(225, 125);      /* makes tweaking placement easier */
    
    ctx.lineWidth = 1.0;
    ctx.strokeStyle = "black";
    ctx.font = '48px serif';
    ctx.rotate(-0.25*Math.PI);
    ctx.strokeText("Japan", 0, 0);

    ctx.restore();

}  
  
  
function initJQAnimation() {

  var theBox = $("#jq-animation-box");
  var theContainer = $("#jq-animation-container");

  theBox.css("width", "50px");
  theBox.css("height", "50px");
  theBox.css("border-radius", "0px");

  var leftCoord = (theContainer.width() / 2);
  leftCoord -= theBox.width() / 2;
  theBox.css("left", (Math.round(leftCoord).toString() + "px")); 

  var topCoord = theContainer.height() - $("#jq-animation-text").height();
  topCoord -= theBox.height();
  theBox.css("top", (Math.round(topCoord).toString() + "px"));

  theBox.css("visibility", "visible"); 

  theBox.html("Click Me!");

}


        
function doJQAnimation() {

  $(this).html("");

  var containerWidth  = $("#jq-animation-container").width();
  var containerHeight = $("#jq-animation-container").height() - $("#jq-animation-text").height();
  
  var leftPos = [];
  var topPos  = [];
  
  leftPos.push(Math.round(containerWidth  *  0.10).toString() + "px");
  topPos.push( Math.round(containerHeight * -0.10).toString() + "px");

  leftPos.push(Math.round(containerWidth  *  0.05).toString() + "px");
  topPos.push( Math.round(containerHeight *  0.75).toString() + "px");

  leftPos.push(Math.round(containerWidth  *  0.70).toString() + "px");
  topPos.push( Math.round(containerHeight *  0.15).toString() + "px");

  leftPos.push(Math.round(containerWidth  *  0.70).toString() + "px");
  topPos.push( Math.round(containerHeight *  0.90).toString() + "px");

  leftPos.push(Math.round(containerWidth  *  0.05).toString() + "px");
  topPos.push( Math.round(containerHeight *  0.90).toString() + "px");

  leftPos.push(Math.round(containerWidth  *  0.66).toString() + "px");
  topPos.push("-1000px");

  $(this).animate({top: "-=100"}, 1000)
         .animate({width: 100, left: "-=25", height: 15}, 1000)
         .animate({borderRadius: "50%"}, 1000)
         .animate({left: leftPos[0], top: topPos[0]}, 1000)
         .animate({left: leftPos[1], top: topPos[1]}, 1000)
         .animate({left: leftPos[2], top: topPos[2]}, 250)
         .animate({left: leftPos[3], top: topPos[3]}, 250)
         .animate({left: leftPos[4], top: topPos[4]}, 4000)
         .animate({left: leftPos[5], top: topPos[5]}, 250, jQAnimationDoneFn);

}

      
function jQAnimationDoneFn() {
  $("#jq-animation-text").animate({opacity: 1}, 3000)
                         .animate({opacity: 0}, 250, initJQAnimation);
}
