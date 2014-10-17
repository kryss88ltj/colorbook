<?php $title = "Violet"; ?>
<?php $css = "violet"; ?>

<?php include("header.php"); ?>

<div id="startScroll">
<!-- Main Section - Includes all but bottom nav slider -->
  <section class="scrollsections">
    <div class="main-section clearfix">

      <!-- Return Home -->
      <a href="index.php"><img class="home" src="assets/img/home/eye.gif" alt="home"></a>

      <!-- Side Menu Left -->
      <nav class="left-nav">
        <a href="ultramarine.php">
          <img class="top-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h5>[cue the smooth jazz]</h5>
          <img class="bottom-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h4>ultramarine</h4>
          <img class="icon" src="assets/img/nav/ultramarine-icon.png" alt="ultramarine icon">
        </a>
      </nav>


      <div class="main-middle-section clearfix">
       <!-- Color Title --> 
        <h1 class="title">violet</h1>

        <!-- Bourges Number --> 
        <div class="bourgesBlock">
          <h5 class="bourges">bourges</h5>
          <h5 class="numeral">19</h5>
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
          <p class="desc-text">Violet is often confused with Indigo</p>
          <img src="assets/img/line.png" alt="lines" class="line2">
          <div class="down-arrow"></div>
        </div>

        
        <div class="icons">
          <!-- Info Icons - Top -->
     
          <div class="top-icons clearfix">
            <div class="top-left-iconset">
              <img class="top-icon1" src="assets/img/violet/icons/icon1.png" alt="">
              <p class="icon-text left-text1">non-conformist</p>
            </div>
             <div class="bottom-right-iconset">
              <img class="top-icon4" src="assets/img/violet/icons/icon4.png" alt="">
              <p class="icon-text left-text2">boosts self-esteem</p>
            </div>
             <div class="top-right-iconset">
              <img class="top-icon2" src="assets/img/violet/icons/icon2.png" alt="">
              <p class="icon-text right-text2">spiritual</p>
            </div>
            <div class="bottom-left-iconset">
              <img class="top-icon3" src="assets/img/violet/icons/icon3.png" alt="">
              <p class="icon-text right-text1">boosts meditation</p>
            </div>
            
          </div>

          
          <!-- Info Icons - Bottom -->
          <div class="bottom-icons clearfix">
            <div class="left-sqs">
              <div class="upper-left-sq">
                <h3><a href="scarlet.php">4</a></h3>
              </div>
               <div class="upper-right-sq">
                <div class="sm-sq1">100</div>
                <div class="sm-sq2">0</div>
                <div class="sm-sq3">100</div>
                <div class="sm-sq4">0</div>
              </div>
              <div class="bottom-left-sq">
                <h3><a href="gold.php">9</a></h3>
              </div>
              <div class="bottom-right-sq">
                <h3><a href="emerald.php">14</a></h3>
              </div>
            </div>

            <!-- Info Icons - Far Right Col -->
            <div class="right-col">
              <div class="a">0</div>
              <div class="b">0</div>
              <div class="c">255</div>
            </div> 
          </div>
        </div> <!-- end icon section --> 

        <div class="main-text clearfix">
          Violet is the hue of the non-conformist - the outsider who is willing to do exactly what he wants. It has the ability to boost your self-esteem, and is reflective on the past. It is a futuristic color, with an eye to the future and a drive to get there. Too much violet will make a composition feel otherworldly and fantastical, but violet can inspire the mind and boost concentration. Under violet light, meditation is said to improve by 40%. Then again, it's meditation - can we really quantify it? Violet is a color of forgiveness and mercy. As a tint and mixed with 10-20% black, it becomes very spiritually dedicated. When you add blue, violet becomes lavender and is very easy on the eyes. And if violet isn't weird
          enough, it's also the visual representation of the musical note of B.
        </div>
            
        <div class="right-infographic">
          <img class="linebottom" src="assets/img/violet/vi-right-info-pic.png" alt="">
        </div> 
      </div> <!-- end main middle section -->

      <!-- Side Menu Right -->
      <nav class="right-nav">
        <a href="purple.php">
          <img class="top-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h5>perfectly introspective</h5>
          <img class="bottom-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h4>purple</h4>
          <img class="right-nav-icon" src="assets/img/nav/purple-icon.png" alt="purple icon">
        </a>
      </nav>

      <div class="page-break">
        <img src="assets/img/violet/arrows-transparent.png">
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

