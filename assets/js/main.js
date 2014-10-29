$(document).ready(function() {  
  console.log("main js working");

  // var windowHeight = window.innerHeight; 
  // $(".section1-wrap").css({
  //   "position":"relative",
  //   "top":"'" + windowHeight + "'"
  // });

// make all columns in main section equal 
  
    function unifyHeights() {
        var maxHeight = 0;
        $('.main-section').children('.main-middle-section').each(function() {
            var height = $(this).outerHeight();
            console.log(height);
            // alert(height);
            if ( height > maxHeight ) {
                maxHeight = height;
            }
        });
        // $('.left-nav, .right-nav, .main-middle-section, .main-section').css('height', maxHeight);
        // $('.main-middle-section').attr('style', 'height: 646px !important');
        $('.main-middle-section').attr('style', 'height: 93%');
        // $('.left-nav, .right-nav').attr('style', 'height: 583px !important');
          $('.left-nav, .right-nav').attr('style', 'height: 84%');
        
        // $('.main-section').css('height', maxHeight);
        console.log("unifying heights");
    }
    unifyHeights();


  // down arrow title description functionality 
  var expandFlag = true;
  $( ".down-arrow" ).click(function() {
    
    // if (expandFlag) {
    //   $('.main-middle-section').attr('style', 'height: 756px !important');
    //   $('.left-nav, .right-nav').attr('style', 'height: 673px !important');
    //   expandFlag = false;
    // } else {
    //    $('.main-middle-section').attr('style', 'height: 646px !important');
    //   $('.left-nav, .right-nav').attr('style', 'height: 583px !important');
    //   expandFlag = true;
    // }
    if (expandFlag) {
      $('.main-middle-section').attr('style', 'height: 93% !important');
      $('.left-nav, .right-nav').attr('style', 'height: 84% !important');
      expandFlag = false;
    } else {
       $('.main-middle-section').attr('style', 'height: 93% !important');
      $('.left-nav, .right-nav').attr('style', 'height: 84% !important');
      expandFlag = true;
    }
    $( ".desc-bar" ).toggleClass("collapsed");
    $( ".down-arrow ").toggleClass("arrow");
    $( ".down-arrow ").toggleClass("arrow-position");
    $( ".line1, .line2").toggle();
    
  });

  //hover functionality for slide nav on sides

  $( ".right-nav" ).mouseenter(
    function() {

      // $( ".main-section" ).css('overflow', 'hidden');
      $( ".right-nav h4, .right-nav h5, .right-nav img" ).css('overflow', 'visible');
      $( this ).animate( {"width": "15%"}, 200 );
      $( ".left-nav" ).animate( {"width": "0%"}, 200 );
      $( ".right-nav h4, .right-nav h5, .right-nav img" ).fadeToggle();
      console.log("hovering on");
      return false;
      
    }
  );

     $( ".right-nav" ).mouseleave(function() {
      // $( ".main-section" ).css('overflow', 'hidden');
      $( ".right-nav h4, .right-nav h5, .right-nav img" ).css('overflow', 'visible');
      $( ".left-nav" ).animate( { "width": "7.5%" }, 300 ).css('overflow', 'hidden');
      $( ".right-nav" ).animate( { "width": "7.5%" }, 300 ).css('overflow', 'hidden');
      
      // $( ".main-middle-section" ).css('overflow', 'hidden');
      // $( "#scroll-nav").css('overflow', 'hidden');
      $( ".right-nav h4, .right-nav h5, .right-nav img" ).fadeToggle(10);
      console.log("hovering off");
      return false;
      }
    );
  

  $( ".left-nav" ).hover(
    function() {
      // $( ".main-section" ).css('overflow', 'hidden');
      $( ".left-nav" ).filter(':not(:animated)').animate( {"width": "14.8%"}, 200 );
      $( ".right-nav" ).filter(':not(:animated)').animate( {"width": "0.19%"}, 200 );
      $( ".left-nav h4, .left-nav h5, .left-nav img" ).fadeToggle();
    }, function() {
      // $( ".main-section" ).css('overflow', 'hidden');
      $( ".left-nav" ).filter(':not(:animated)').animate( { "width": "7.5%" }, 300 );
      $( ".right-nav" ).filter(':not(:animated)').animate( {"width": "7.5%"}, 300 );
      
      // $( ".main-middle-section" ).css('overflow', 'hidden');
      // $( "#scroll-nav").css('overflow', 'hidden');
      $( ".left-nav h4, .left-nav h5, .left-nav img" ).fadeToggle(10);
    }
  );

// Info popup


$(".info-icon").click(function() {
  $(".main-popup, .popup-wrap").fadeToggle();
  $("body").css("overflow","hidden");
});


$(".close-icon, .main-popup").click(function() {
  $(".main-popup, .popup-wrap").fadeToggle();
  $("body").css("overflow","auto");
});


// functionality for arrow scrolling 


function scrollToAnchor(aid){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}

$(".page-break").click(function() {
   scrollToAnchor('scroll-nav');
});

    
// hack for bottom scrolling 

$("#nav-ul .home-nav").hover(
  function() {
    // console.log("hovering purp");
    // console.log( $("#scroll-nav").width());
    // var position = $("#scroll-nav").children('ul:first');
    var expandScroller = document.getElementById("nav-ul");
    console.log(expandScroller);
    var $homeNav = $(this).children('ul:first').children('li:last');

    $homeNav.hover(

      function() {
        expandScroller.style.width = "4500px";
        console.log("touching puprp");
      });


  });
    

}); // end global 




