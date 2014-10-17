<?php $title = "Cyan"; ?>
<?php $css = "cyan"; ?>

<?php include("header.php"); ?>

<div id="startScroll">
<!-- Main Section - Includes all but bottom nav slider -->
  <section class="scrollsections">
    <div class="main-section clearfix">

      <!-- Return Home -->
      <a href="index.php"><img class="home" src="assets/img/home/eye.gif" alt="home"></a>

      <!-- Side Menu Left -->
      <nav class="left-nav">
        <a href="teal.php">
          <img class="top-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h5>oscar wilde: the hue.</h5>
          <img class="bottom-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h4>teal</h4>
          <img class="icon" src="assets/img/nav/teal-icon.png" alt="teal icon">
        </a>
      </nav>


      <div class="main-middle-section clearfix">
       <!-- Color Title --> 
        <h1 class="title">cyan</h1>

        <!-- Bourges Number --> 
        <div class="bourgesBlock">
          <h5 class="bourges">bourges</h5>
          <h5 class="numeral">16</h5>
          <h5 class="number">number</h5>
        </div> 

        <!-- Percentage Bar --> 
        <div class="percentageBar">
          <div class="top-border"></div>
          <div class="ninety">90%</div>
          <div class="eighty">80%</div>
          <div class="seventy">70%</div>
          <div class="sixty">60%</div>
          <div class="fifty">50%</div>
          <div class="forty">40%</div>
          <div class="thirty">30%</div>
          <div class="twenty">20%</div>
          <div class="ten">10%</div>
          <div class="five">5%</div>
        </div> 

        <!-- Description Bar --> 
        <div class="desc-bar collapsed">
          <img src="assets/img/line.png" alt="lines" class="line1">
          <p class="desc-text">Also called Peacock or Process Blue</p>
          <img src="assets/img/line.png" alt="lines" class="line2">
          <div class="down-arrow"></div>
        </div>

        
        <div class="icons">
          <!-- Info Icons - Top -->
     
          <div class="top-icons clearfix">
            <div class="top-left-iconset">
              <img class="top-icon1" src="assets/img/cyan/icons/icon1.png" alt="">
              <p class="icon-text left-text1">technical</p>
            </div>
             <div class="bottom-right-iconset">
              <img class="top-icon4" src="assets/img/cyan/icons/icon4.png" alt="">
              <p class="icon-text right-text2">left-brained</p>
            </div>
            <div class="top-right-iconset">
              <img class="top-icon2" src="assets/img/cyan/icons/icon2.png" alt="">
              <p class="icon-text right-text1">logical</p>
            </div>
            <div class="bottom-left-iconset">
              <img class="top-icon3" src="assets/img/cyan/icons/icon3.png" alt="">
              <p class="icon-text left-text2">orderly</p>
            </div>
            
          </div>

          
          <!-- Info Icons - Bottom -->
          <div class="bottom-icons clearfix">
            <div class="left-sqs">
              <div class="upper-left-sq">
                <h3><a href="mauve.php">1</a></h3>
              </div>
               <div class="upper-right-sq">
                <div class="sm-sq1">100</div>
                <div class="sm-sq2">0</div>
                <div class="sm-sq3">0</div>
                <div class="sm-sq4">0</div>
              </div>
              <div class="bottom-left-sq">
                <h3><a href="coral.php">6</a></h3>
              </div>
              <div class="bottom-right-sq">
                <h3><a href="lime.php">11</a></h3>
              </div>
            </div>

            <!-- Info Icons - Far Right Col -->
            <div class="right-col">
              <div class="a">0</div>
              <div class="b">255</div>
              <div class="c">255</div>
            </div> 
          </div>
        </div> <!-- end icon section --> 

        <div class="main-text clearfix">
          01101110011001010111001001100100. Cyan is a clinical, robotic color, devoid of feeling or emotion. Of all the hues, it is the most technical, to the point of being creatively limited. It's the perfect color for blueprints or technical diagrams, but cyan just doesn't lend itself to a marathon poetry session. Its left-brain tendencies are just too much to overcome. It it, however, a very good color for tech companies, especially when paired with black. The result is a cold, clean aesthetic that makes people think of a dystopian future of robots and jetpacks and traveling in tubes.
        </div>
            
        <div class="right-infographic">
          <img class="linebottom" src="assets/img/cyan/cyan-right-info-pic.png" alt="">
        </div> 
      </div> <!-- end main middle section -->

      <!-- Side Menu Right -->
      <nav class="right-nav">
        <a href="sky-blue.php">
          <img class="top-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h5>a hue you can trust</h5>
          <img class="bottom-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h4>sky blue</h4>
          <img class="right-nav-icon" src="assets/img/nav/sky-blue-icon.png" alt="sky blue icon">
        </a>
      </nav>

      <div class="page-break">
        <img src="assets/img/cyan/arrows-transparent.png">
      </div>

    </div> <!-- end entire main section --> 
  </section> 

  <section class="scrollsections section2">
    <?php include("footer.php"); ?>
  </section>
</div>

  <div id="transition"><?php include("tablet.php"); ?></div>

  <script>
    $('.main-text').flowtype({
       maxFont   : 20,
       fontRatio : 20});
  </script>

  <script>
    $("#startScroll").snapscroll();
  </script>

</body>
</html>

