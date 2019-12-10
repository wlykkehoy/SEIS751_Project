/* ============================================================
    This JavaScript is for the sake-industry-news.php page
============================================================ */
"use strict";


/* After the page loads
  ------------------------------------------------------------ */
$(function() {

  /* set the navbar item for the Home page to active */
  $("#nav-link-featured").addClass("active");
  $("#nav-dropdown-sake-industry-news").addClass("active");

  
  /* load up google charts */
  google.charts.load('current', {packages: ['corechart', 'line']});

  /* Setting an event handler to invoke the dawing function
     when the modal pop-up has been displayed.
    ------------------------------------------------------------ */
  $("#rice-prod-modal").on("shown.bs.modal", drawRiceProdChart);
  
});


/* The function to actually draw the chart
  ------------------------------------------------------------ */
function drawRiceProdChart() {
  var data = new google.visualization.DataTable();
  data.addColumn('string', 'Year');
  data.addColumn('number', 'Volume');

  data.addRows([
    ['2010', 45368],
    ['2011', 42780],
    ['2012', 43572],
    ['2013', 44115],
    ['2014', 42368],
    ['2015', 42416],
    ['2016', 42000],
    ['2017', 42616],
    ['2018', 43032],
    ['2019', 42196]
  ]);

  var options = {
    hAxis: {
      title: 'Year',
      textStyle: { 
        fontSize: 10,
      }          
    },
    vAxis: {
      title: 'Metric Tons',
      gridlines: { 
        count: 4 
      },
      viewWindow: {
        min: 35000,
        max: 50000
      },
      textStyle: { 
        fontSize: 10,
      }          
    },
    chartArea:{width:'60%'}
  };
  

  var chart = new google.visualization.LineChart(document.getElementById('rice-prod-modal_chart_div'));
  chart.draw(data, options);
}

