<?php $title = "Mauve"; ?>
<?php $css = "mauve"; ?>

<?php include("header.php"); ?>

<div id="startScroll">
<!-- Main Section - Includes all but bottom nav slider -->
  <section class="scrollsections">
    <div class="main-section clearfix">

      <!-- Return Home -->
      <a href="index.php"><img class="home" src="assets/img/home/eye.gif" alt="home"></a>

      <!-- Side Menu Left -->
      <nav class="left-nav">
        <a href="purple.php">
          <img class="top-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h5>Perfectly introspective.</h5>
          <img class="bottom-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h4>purple</h4>
          <img class="icon" src="assets/img/nav/purple-icon.png" alt="purple icon">
        </a>
      </nav>


      <div class="main-middle-section clearfix">
       <!-- Color Title --> 
        <h1 class="title">mauve</h1>

        <!-- Bourges Number --> 
        <div class="bourgesBlock">
          <h5 class="bourges">bourges</h5>
          <h5 class="numeral">1</h5>
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
          <p class="desc-text">Mauve is also called Analine Purple, Mauvaline and Mallow</p>
          <img src="assets/img/line.png" alt="lines" class="line2">
          <div class="down-arrow"></div>
        </div>

        
        <div class="icons">
          <div class="top-icons clearfix">
            <div class="top-left-iconset">
              <img class="top-icon1" src="assets/img/mauve/icons/icon1.png" alt="">
              <p class="icon-text left-text1">first chem color</p>
            </div>
            <div class="top-right-iconset">
              <img class="top-icon2"src="assets/img/mauve/icons/icon2.png" alt="">
              <p class="icon-text right-text1">stylish</p>
            </div>
            <div class="bottom-left-iconset">
              <img class="top-icon3" src="assets/img/mauve/icons/icon3.png" alt="">
              <p class="icon-text left-text2">mournful</p>
            </div>
             <div class="bottom-right-iconset">
              <img class="top-icon4" src="assets/img/mauve/icons/icon4.png" alt="">
              <p class="icon-text right-text2">expensive</p>
            </div>
          </div>
        
          
          <!-- Info Icons - Bottom -->
          <div class="bottom-icons clearfix">
            <div class="left-sqs">
              <div class="upper-left-sq">
                <h3><a href="coral.php">6</a></h3>
              </div>
               <div class="upper-right-sq">
                <div class="sm-sq1">30</div>
                <div class="sm-sq2">0</div>
                <div class="sm-sq3">100</div>
                <div class="sm-sq4">0</div>
              </div>
              <div class="bottom-left-sq">
                <h3><a href="lime.php">11</a></h3>
              </div>
              <div class="bottom-right-sq">
                <h3><a href="cyan.php">16</a></h3>
              </div>
            </div>

            <!-- Info Icons - Far Right Col -->
            <div class="right-col">
              <div class="a">178</div>
              <div class="b">0</div>
              <div class="c">255</div>
            </div> 
          </div>
        </div> <!-- end icon section --> 

        <div class="main-text clearfix">
            Mauve is the coolest hue in of all the reds. It has a fashionable and 
            stylish appearance, particularly when paired with grey and other neutral colors. 
            Mauve naturally appears more expensive than other colors. Mauvaline was the first 
            color to be made with chemicals rather than natural pigments. Originally, the 
            color was obtained from leaves of the mallow flower. Mauve is also a color 
            representative of mourning, and brings a human touch to ceremonies covered in 
            black. It is also a common choice for bridesmaid dresses, proving that women can 
            be as bleak about their weddings as the grooms they drag down the aisle.
        </div>

        <div class="right-infographic">
          <h1>nice glasses, <span>nerd</span></h1>
          <img src="assets/img/infog-line.png" alt="">
          <p>Looking at the color red for a long time can be exhausting and leads to near-sightedness.</p>
          <img src="assets/img/infog-line.png" alt="">
          <img class="glasses" src="assets/img/mauve/glasses.png" alt="">
        </div> 

      </div> <!-- end main middle section -->

      <!-- Side Menu Right -->
      <nav class="right-nav">
        <a href="magenta.php">
          <img class="top-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h5>REGINA GEORGE IN COLOR FORM</h5>
          <img class="bottom-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h4>magenta</h4>
          <img class="right-nav-icon" src="assets/img/nav/magenta-icon.png" alt="magenta icon">
        </a>
      </nav>

      <div class="page-break">
        <a href="#scroll-nav"><img src="assets/img/mauve/arrows-transparent.png"></a>
      </div>

    </div> <!-- end entire main section --> 
  </section>

  <section class="scrollsections section2">
    <?php include("footer.php"); ?>
  </section>

</div>

<div id="transition">Tablet version coming soon!</div>

<script>
  $("#startScroll").snapscroll();
</script>

<script>
    $('.main-text').flowtype({
       maxFont   : 20,
       fontRatio : 26});
</script>

</body>
</html>