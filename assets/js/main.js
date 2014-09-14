$(document).ready(function() {  
  console.log("main js working");

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
      $('.main-middle-section').attr('style', 'height: 98% !important');
      $('.left-nav, .right-nav').attr('style', 'height: 88% !important');
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
    
// hack for bottom scrolling 

$("#scroll-nav").hover(
  function() {
    // console.log("hovering purp");
    // console.log( $("#scroll-nav").width());
    var position = $(this).children('ul:first').position();
    console.log(position);
    var $purple = $(this).children('ul:first').children('li:last');

    $purple.hover(

      function() {
        position.left += '25px';
        console.log("touching puprp");
      });

    // $(".ultramarine-nav").attr('width', '184px');
    // $(".mauve-nav").attr('width', '184px');
    // $(".magenta-nav").attr('width', '184px');
    // $(".sky-blue-nav").attr('width', '184px');
    // $(".cyan-nav").attr('width', '184px');
    // $(".emerald-nav").attr('width', '184px');
    // $(".sea-green-nav").attr('width', '184px');
    // $(".leaf-green-nav").attr('width', '184px');
    // $(".lime-nav").attr('width', '184px');
    // $(".yellow-nav").attr('width', '184px');
  });
    

}); // end global 



  // var upFlag = true;
  
  // $(window).scroll(function(){
  //   var top = $(this).scrollTop();
  //   // var navTop = $("#scroll-nav").scrollTop(668);
  //   console.log(top);
  //   // console.log(navTop);

  //   if(top > 150 && upFlag){
  //     upFlag = false;
  //   console.log("past 250");
   
  //     var body = $("body");
  //     body.animate({scrollTop: 668}, 1000, 'swing', function() {
  //       // upFlag = false;
  //         if (!upFlag) {
  //           $(window).scroll(function() {
  //             upFlag = true;
  //             console.log("second scroll event");
  //             body.animate({scrollTop: 0}, 1000, 'swing', function() {
  //               console.log("back up");
  //             upFlag = false;
  //             });
  //           });
  //         }
  //       });
  //   }
  // });

//try 2

