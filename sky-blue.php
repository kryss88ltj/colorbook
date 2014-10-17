<?php $title = "Sky Blue"; ?>
<?php $css = "sky-blue"; ?>

<?php include("header.php"); ?>

<div id="startScroll">
<!-- Main Section - Includes all but bottom nav slider -->
  <section class="scrollsections">
    <div class="main-section clearfix">

      <!-- Return Home -->
      <a href="index.php"><img class="home" src="assets/img/home/eye.gif" alt="home"></a>

      <!-- Side Menu Left -->
      <nav class="left-nav">
        <a href="cyan.php">
          <img class="top-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h5>domo arigato, mr. roboto</h5>
          <img class="bottom-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h4>cyan</h4>
          <img class="icon" src="assets/img/nav/cyan-icon.png" alt="cyan icon">
        </a>
      </nav>


      <div class="main-middle-section clearfix">
       <!-- Color Title --> 
        <h1 class="title">sky blue</h1>

        <!-- Bourges Number --> 
        <div class="bourgesBlock">
          <h5 class="bourges">bourges</h5>
          <h5 class="numeral">17</h5>
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
          <p class="desc-text">Sky Blue is also called Azure.</p>
          <img src="assets/img/line.png" alt="lines" class="line2">
          <div class="down-arrow"></div>
        </div>

        
        <div class="icons">
          <!-- Info Icons - Top -->
     
          <div class="top-icons clearfix">
            <div class="top-left-iconset">
              <img class="top-icon1" src="assets/img/skyblue/icons/icon1.png" alt="">
              <p class="icon-text left-text1">globally loved</p>
            </div>
             <div class="bottom-right-iconset">
              <img class="top-icon4" src="assets/img/skyblue/icons/icon4.png" alt="">
              <p class="icon-text left-text2">movin' on up</p>
            </div>
             <div class="top-right-iconset">
              <img class="top-icon2" src="assets/img/skyblue/icons/icon2.png" alt="">
              <p class="icon-text right-text2">honest</p>
            </div>
            <div class="bottom-left-iconset">
              <img class="top-icon3" src="assets/img/skyblue/icons/icon3.png" alt="">
              <p class="icon-text right-text1">opens up spaces</p>
            </div>
            
          </div>

          
          <!-- Info Icons - Bottom -->
          <div class="bottom-icons clearfix">
            <div class="left-sqs">
              <div class="upper-left-sq">
                <h3><a href="magenta.php">2</a></h3>
              </div>
               <div class="upper-right-sq">
                <div class="sm-sq1">100</div>
                <div class="sm-sq2">0</div>
                <div class="sm-sq3">20</div>
                <div class="sm-sq4">0</div>
              </div>
              <div class="bottom-left-sq">
                <h3><a href="orange.php">7</a></h3>
              </div>
              <div class="bottom-right-sq">
                <h3><a href="leaf-green.php">12</a></h3>
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
          This is the color of truth, justice and the American way. Sky blue is the most honest hue on the Bourges chart, and might even get you out of that pesky parking ticket if you wear it to court. It is the most common &#34;favorite&#34; blue, which is also the most common favorite color, making it the favorite favorite. Favorite squared. Sky blue is the most acceptable color, especially internationally. The UN even uses it as the main color in their uniforms. It is proven to help speech patterns and reduce nervous ticks, and naturally appears to be moving up. It opens up spaces - especially in tints, which makes it great for using in small rooms.
        </div>
            
        <div class="right-infographic">
          <img class="linebottom" src="assets/img/skyblue/sb-right-info-pic.png" alt="">
        </div> 
      </div> <!-- end main middle section -->

      <!-- Side Menu Right -->
      <nav class="right-nav">
        <a href="ultramarine.php">
          <img class="top-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h5>[cue the smooth jazz]</h5>
          <img class="bottom-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h4>ultramarine</h4>
          <img class="right-nav-icon" src="assets/img/nav/ultramarine-icon.png" alt="ultramarine icon">
        </a>
      </nav>

      <div class="page-break">
        <img src="assets/img/skyblue/arrows-transparent.png">
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

