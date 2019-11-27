
/* ============================================================
    This JavaScript is for my custom component, marius-psi.
    The marius-psi element displays the PageSpeed Indicator score
    and a thumbs up or down depending if the minimum score is 
    attained. 
    
    Element usage:
    
    <marius-psi mode="mobile | desktop" score='<score>'></marius-psi>
============================================================ */
"use strict";




class MariusPSI extends HTMLElement {

  /* Our constructor; where most of the fun happens
    ------------------------------------------------------------ */
  constructor() {
    // Always call super first in constructor
    super();


    // everything goes under a shadow DOM
    var shadow = this.attachShadow({mode: 'open'});

    // extract attribute values if they are specified; else use defaults
    var mode = "desktop";   /* initialize to our default value */
    if (this.hasAttribute("mode")) {
      mode = this.getAttribute("mode");
    }
    
    var score = 0;    /* initialize to our default value */
    if (this.hasAttribute("score")) {
      score = this.getAttribute("score");
    } 
    
    var size = 100;   /* initialize to our default value */
    if (this.hasAttribute("size")) {
      size = this.getAttribute("size");
    }
    
    // determine if we have a thumbs-up or thumbs-down situation
    var thumbsUp;
    if (mode == "desktop") {
      if (score >= 80) {
        thumbsUp = true;
      }
      else {
        thumbsUp = false;
      }
    } else {  /* mode == "mobile" */
      if (score >= 75) {
        thumbsUp = true;
      }
      else {
        thumbsUp = false;
      }
    }
  

    // determine our scaling factor for the specified size
    var scaleFactor = size / 24;    /* the thumb SVG is 24x24 */

    // handy for debugging
    if (this.hasAttribute("debug")) {
      console.log("<marius-psi>");
      console.log("  mode: " + mode);
      console.log("  score: " + score);
      console.log("  size: " + size);
      console.log("  thumbsUp: " + thumbsUp);
      console.log("  scaleFactor: " + scaleFactor);
    }
    
    // generate the html and put in the DOM
    var html = "";
    html += "<style>";
    html += "  .score {";
    html += "    color:black;";
    html += "    font-family:Arial;";
    html += "    font-size:8px;";
    html += "    font-weight:bold;";
    html += "  }";
    html += "</style>";
    if (thumbsUp) {
      html += "<svg xmlns='http://www.w3.org/2000/svg' width='" + size + "' height='" + size + "' viewbox='0 0 " + size + " " + size + "'>";
      html += "<g transform='scale(" + scaleFactor + ")'>";
      html += "<path d='M19.396 20.708c-.81-.062-.733-.812.031-.953 1.269-.234 1.827-.914 1.827-1.543 0-.529-.396-1.022-1.098-1.181-.837-.189-.664-.757.031-.812 1.132-.09 1.688-.764 1.688-1.41 0-.565-.425-1.108-1.261-1.22-.857-.115-.578-.734.031-.922.521-.16 1.354-.5 1.354-1.51 0-.672-.5-1.562-2.271-1.49-1.228.05-3.667-.198-4.979-.885.907-3.657.689-8.782-1.687-8.782-1.594 0-1.896 1.807-2.375 3.469-1.718 5.969-5.156 7.062-8.687 7.603v9.928c6.688 0 8.5 3 13.505 3 3.199 0 4.852-1.735 4.852-2.666-.001-.334-.273-.572-.961-.626z' fill='LimeGreen'/>";
      html += "<text x='12' y='18' text-anchor='middle' class='score'>" + score + "</text>";
      html += "</g>";
      html += "</svg>";
    } else {
      html += "<svg xmlns='http://www.w3.org/2000/svg' width='" + size + "' height='" + size + "' viewbox='0 0 " + size + " " + size + "'>";
      html += "<g transform='scale(" + scaleFactor + ")'>";
      html += "<path d='M19.396 3.292c-.811.062-.734.812.031.953 1.268.234 1.826.914 1.826 1.543 0 .529-.396 1.022-1.098 1.181-.837.189-.664.757.031.812 1.133.09 1.688.764 1.688 1.41 0 .565-.424 1.108-1.26 1.22-.857.115-.578.734.031.922.521.16 1.354.5 1.354 1.51 0 .672-.5 1.562-2.271 1.49-1.228-.05-3.666.198-4.979.885.907 3.657.689 8.782-1.687 8.782-1.594 0-1.896-1.807-2.375-3.469-1.718-5.969-5.156-7.062-8.687-7.603v-9.928c6.688 0 8.5-3 13.505-3 3.198 0 4.852 1.735 4.852 2.666-.001.334-.273.572-.961.626z' fill='red'/>";
      html += "<text x='12' y='11' text-anchor='middle' class='score'>" + score + "</text>";
      html += "</g>";
      html += "</svg>";
    }

    shadow.innerHTML = html;

  }


  /* Stuff to do when the element is added to the DOM; typically
     adding callbacks, etc.
    ------------------------------------------------------------ */
  connectedCallback() {
    
    // ... can't think of anything right now ...
    

  }
}
    
customElements.define("marius-psi", MariusPSI);
