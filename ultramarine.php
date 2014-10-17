<?php $title = "Ultramarine"; ?>
<?php $css = "ultramarine"; ?>

<?php include("header.php"); ?>

<div id="startScroll">
<!-- Main Section - Includes all but bottom nav slider -->
  <section class="scrollsections">
    <div class="main-section clearfix">

      <!-- Return Home -->
      <a href="index.php"><img class="home" src="assets/img/home/eye.gif" alt="home"></a>

      <!-- Side Menu Left -->
      <nav class="left-nav">
        <a href="sky-blue.php">
          <img class="top-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h5>a hue you can trust</h5>
          <img class="bottom-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h4>sky blue</h4>
          <img class="icon" src="assets/img/nav/sky-blue-icon.png" alt="sky blue icon">
        </a>
      </nav>


      <div class="main-middle-section clearfix">
       <!-- Color Title --> 
        <h1 class="title">ultramarine</h1>

        <!-- Bourges Number --> 
        <div class="bourgesBlock">
          <h5 class="bourges">bourges</h5>
          <h5 class="numeral">18</h5>
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
          <p class="desc-text">Ultramarine is sometimes called Royal Blue.</p>
          <img src="assets/img/line.png" alt="lines" class="line2">
          <div class="down-arrow"></div>
        </div>

        
        <div class="icons">
          <!-- Info Icons - Top -->
     
          <div class="top-icons clearfix">
            <div class="top-left-iconset">
              <img class="top-icon1" src="assets/img/ultramarine/icons/icon1.png" alt="">
              <p class="icon-text left-text1">calming</p>
            </div>
             <div class="bottom-right-iconset">
              <img class="top-icon4" src="assets/img/ultramarine/icons/icon4.png" alt="">
              <p class="icon-text left-text2">tied to r&#38;b</p>
            </div>
             <div class="top-right-iconset">
              <img class="top-icon2" src="assets/img/ultramarine/icons/icon2.png" alt="">
              <p class="icon-text right-text2">expensive</p>
            </div>
            <div class="bottom-left-iconset">
              <img class="top-icon3" src="assets/img/ultramarine/icons/icon3.png" alt="">
              <p class="icon-text right-text1">lawful</p>
            </div>
            
          </div>

          
          <!-- Info Icons - Bottom -->
          <div class="bottom-icons clearfix">
            <div class="left-sqs">
              <div class="upper-left-sq">
                <h3><a href="crimson.php">3</a></h3>
              </div>
               <div class="upper-right-sq">
                <div class="sm-sq1">100</div>
                <div class="sm-sq2">0</div>
                <div class="sm-sq3">60</div>
                <div class="sm-sq4">0</div>
              </div>
              <div class="bottom-left-sq">
                <h3><a href="amber.php">8</a></h3>
              </div>
              <div class="bottom-right-sq">
                <h3><a href="sea-green.php">13</a></h3>
              </div>
            </div>

            <!-- Info Icons - Far Right Col -->
            <div class="right-col">
              <div class="a">0</div>
              <div class="b">102</div>
              <div class="c">255</div>
            </div> 
          </div>
        </div> <!-- end icon section --> 

        <div class="main-text clearfix">
          This hue is orderly and lawful - an upstanding citizen of the color world. It is a favorite for police uniforms and signifies compassion in the chaos of this disorderly world. Ultramarine has a very calming effect on people. It is also a soulful color, symbolizing Soul and R&#38;B music. Along with crimson, it was a favorite for use in illustrated manuscripts. This is tied to ultramarine&#39;s status as the most expensive of all the blues.
        </div>
            
        <div class="right-infographic">
          <img class="linebottom" src="assets/img/ultramarine/um-right-info-pic.png" alt="">
        </div> 
      </div> <!-- end main middle section -->

      <!-- Side Menu Right -->
      <nav class="right-nav">
        <a href="violet.php">
          <img class="top-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h5>just like your crazy uncle jeb</h5>
          <img class="bottom-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h4>violet</h4>
          <img class="right-nav-icon" src="assets/img/nav/violet-icon.png" alt="violet icon">
        </a>
      </nav>

      <div class="page-break">
        <a name="scroll-nav"><img src="assets/img/ultramarine/arrows-transparent.png"></a>
      </div>

    </div> <!-- end entire main section --> 
  </section> 

  <section class="scrollsections section2">
    <?php include("footer.php"); ?>
  </section>
</div>

<div id="transition"><?php include("tablet.php"); ?></div>

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