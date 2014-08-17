$(document).ready(function() {  
  console.log("main js working");

// make all columns in main section equal 

  $(function() {
    function unifyHeights() {
        var maxHeight = 0;
        $('.main-section').children('.left-nav, .right-nav, .main-middle-section').each(function() {
            var height = $(this).outerHeight();
            // alert(height);
            if ( height > maxHeight ) {
                maxHeight = height;
            }
        });
        $('.left-nav, .right-nav, .main-middle-section').css('height', maxHeight);
    }
    unifyHeights();
  });


  // down arrow title description functionality 

  $( ".down-arrow" ).click(function() {

    $( ".desc-bar" ).toggleClass("collapsed");
    $( ".down-arrow ").toggleClass("arrow");
    $( ".down-arrow ").toggleClass("arrow-position");
    $( ".line1, .line2").toggle();
  });

  // Page Scrolling
  
  $(function() {
    
    $('section.scrollsections .title').hide(); // Hide all titles

    $('section.scrollsections')
      .scrollSections({
        alwaysStartWithFirstSection : true, // force to load the page on the first section (prevent broswer caching)
        
        before: function($currentSection, $nextSection){

          _initFuturSection($nextSection);
        },
        
        after: function($currentSection, $previousSection){

          _initNewSection($currentSection, $previousSection);
        }
      });

    function _initNewSection($section, $prevSection){

      // Do some stuff each time this new section ends animating
      
      // Only if there is a previous section (its null on first scroll)
      if($prevSection){
        $('.title', $prevSection).hide(); // Hide old section title
      }
      $('.title', $section).fadeIn(); // Fade in current section title
      
      // Do some stuffs only on first init
      if( !$section.data('isInit') ){
        // Create slider for example
        // $('.selector', $section).slider();

        // Singleton
        $section.data('isInit', true);
      }
    }

    function _initFuturSection($section){

      // Do some stuff each time before this section appears
      $('.title', $section).hide();
    }
  });

  //hover functionality for slide nav on sides

  $( ".right-nav" ).hover(
    function() {
      // $( ".main-section" ).css('overflow', 'hidden');
      $( ".right-nav h4, .right-nav h5, .right-nav img" ).css('overflow', 'hidden');
      $( ".right-nav" ).animate( {"width": "14.8%"}, 200 );
      $( ".left-nav" ).animate( {"width": "0.19%"}, 200 );
      $( ".right-nav h4, .right-nav h5, .right-nav img" ).fadeToggle();
        

    }, function() {
      // $( ".main-section" ).css('overflow', 'hidden');
      $( ".right-nav h4, .right-nav h5, .right-nav img" ).css('overflow', 'hidden');
      $( ".left-nav" ).animate( { "width": "7.5%" }, 300 ).css('overflow', 'hidden');;
      $( ".right-nav" ).animate( { "width": "7.5%" }, 300 ).css('overflow', 'hidden');
      
      // $( ".main-middle-section" ).css('overflow', 'hidden');
      // $( "#scroll-nav").css('overflow', 'hidden');
      $( ".right-nav h4, .right-nav h5, .right-nav img" ).fadeToggle(10);
       
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
    


}); // end global 

