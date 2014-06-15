$(document).ready(function() {  
  console.log("main js working");

  // down arrow title description functionality 

  $( ".down-arrow" ).click(function() {

    $( ".desc-bar" ).toggleClass("collapsed");
    $( ".down-arrow ").toggleClass("arrow");
    $( ".down-arrow ").toggleClass("arrow-position");
    $( ".line1, .line2").toggle();
  });

});