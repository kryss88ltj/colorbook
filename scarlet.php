<?php $title = "Scarlet"; ?>
<?php $css = "scarlet"; ?>

<?php include("header.php"); ?>

<div id="startScroll">
<!-- Main Section - Includes all but bottom nav slider -->
  <section class="scrollsections">  
    <div class="main-section clearfix">

      <!-- Return Home -->
      <a href="index.php"><img class="home" src="assets/img/home/eye.gif" alt="home"></a>

      <!-- Side Menu Left -->
      <nav class="left-nav">
        <a href="crimson.php">
          <img class="top-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h5>it's ok to feel more violent</h5>
          <img class="bottom-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h4>crimson</h4>
          <img class="icon" src="assets/img/nav/crimson-icon.png" alt="crimson icon">
        </a>
      </nav>


      <div class="main-middle-section clearfix">
       <!-- Color Title --> 
        <h1 class="title">scarlet</h1>

        <!-- Bourges Number --> 
        <div class="bourgesBlock">
          <h5 class="bourges">bourges</h5>
          <h5 class="numeral">4</h5>
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
          <p class="desc-text">&#34;Scarlet&#34; was first dubbed in 11th Century England.</p>
          <img src="assets/img/line.png" alt="lines" class="line2">
          <div class="down-arrow"></div>
        </div>

        
        <div class="icons">
          <!-- Info Icons - Top -->
     
          <div class="top-icons clearfix">
            <div class="top-left-iconset">
              <img class="top-icon1" src="assets/img/scarlet/icons/icon1.png" alt="">
              <p class="icon-text left-text1">very sexual</p>
            </div>
            <div class="top-right-iconset">
              <img class="top-icon2" src="assets/img/scarlet/icons/icon2.png" alt="">
              <p class="icon-text right-text1">opens spaces up</p>
            </div>
            <div class="bottom-left-iconset">
              <img class="top-icon3" src="assets/img/scarlet/icons/icon3.png" alt="">
              <p class="icon-text left-text2">hef&#39;s jacket</p>
            </div>
             <div class="bottom-right-iconset">
              <img class="top-icon4" src="assets/img/scarlet/icons/icon4.png" alt="">
              <p class="icon-text right-text2">trusted</p>
            </div>
          </div>

          
          <!-- Info Icons - Bottom -->
          <div class="bottom-icons clearfix">
            <div class="left-sqs">
              <div class="upper-left-sq">
                <h3><a href="gold.php">9</a></h3>
              </div>
               <div class="upper-right-sq">
                <div class="sm-sq1">0</div>
                <div class="sm-sq2">50</div>
                <div class="sm-sq3">100</div>
                <div class="sm-sq4">0</div>
              </div>
              <div class="bottom-left-sq">
                <h3><a href="emerald.php">14</a></h3>
              </div>
              <div class="bottom-right-sq">
                <h3><a href="violet.php">19</a></h3>
              </div>
            </div>

            <!-- Info Icons - Far Right Col -->
            <div class="right-col">
              <div class="a">255</div>
              <div class="b">0</div>
              <div class="c">128</div>
            </div> 
          </div>
        </div> <!-- end icon section --> 

        <div class="main-text clearfix">
          Scarlet is a naughty, naughty color. It's the hue of the Hef's iconic smoking jacket and favored by pimps who want to be like him. But like Hugh Hefner, scarlet is surprisingly believable despite it's risqu&#233; reputation. Scarlet isn't as chatty as magenta and not nearly as gregarious as gold. Scarlet is a fantastic color to make a small room feel more open. It naturally feels very long and wide, even when it is the same size as another color swatch.
        </div>
            
        <div class="right-infographic">
          <h1>red hot love</h1>
          <img src="assets/img/infog-line.png" alt="">
          <p>Red is the universally accepted color of love, joy and passion. It also makes men spend more, proving that subconscious, culturally-engrained 
          sex sells.</p>
          <img src="assets/img/infog-line.png" alt="">
          <img class="bottom-img" src="assets/img/scarlet/heart-icon.png" alt="heart">
        </div> 
      </div> <!-- end main middle section -->

      <!-- Side Menu Right -->
      <nav class="right-nav">
        <a href="poster-red.php">
          <img class="top-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h5>RESISTANCE IS FUTILE</h5>
          <img class="bottom-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h4>poster red</h4>
          <img class="right-nav-icon" src="assets/img/nav/poster-red-icon.png" alt="poster red icon">
        </a>
      </nav>
  
      <div class="page-break">
        <a name="scroll-nav"><img src="assets/img/magenta/arrows-transparent.png"></a>
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
       maxFont   : 25,
       fontRatio : 26});
  </script>

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

