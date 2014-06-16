$(document).ready(function() {  
  console.log("main js working");

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


});

