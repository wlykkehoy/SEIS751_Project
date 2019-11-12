

$(function() {
  /* Set event handler to render canvas drawing when it's tab is shown */
  $("a[href='#nav-canvas-drawing']").on("shown.bs.tab", drawCanvas);
  


  /* Was hoping I would get a 'shown.bs.tab' event on page load for the 
     initial tab being displayed; but I don't. So, here we will 'assume'
     which tab is first in the HTML and display it's generated content. */
     drawCanvas();
     
     
/*  
  $("#nav-svg-drawing").tab("show");
  */
  
});
  
  
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
  
  


