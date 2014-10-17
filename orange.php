<?php $title = "Orange"; ?>
<?php $css = "orange"; ?>

<?php include("header.php"); ?>

<div id="startScroll">
<!-- Main Section - Includes all but bottom nav slider -->
  <section class="scrollsections">  
    <div class="main-section clearfix">

      <!-- Return Home -->
      <a href="index.php"><img class="home" src="assets/img/home/eye.gif" alt="home"></a>

      <!-- Side Menu Left -->
      <nav class="left-nav">
        <a href="coral.php">
          <img class="top-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h5>burn baby, burn</h5>
          <img class="bottom-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h4>coral</h4>
          <img class="icon" src="assets/img/nav/coral-icon.png" alt="coral icon">
        </a>
      </nav>


      <div class="main-middle-section clearfix">
       <!-- Color Title --> 
        <h1 class="title">orange</h1>

        <!-- Bourges Number --> 
        <div class="bourgesBlock">
          <h5 class="bourges">bourges</h5>
          <h5 class="numeral">7</h5>
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
          <p class="desc-text">Orange you glad you clicked that button?</p>
          <img src="assets/img/line.png" alt="lines" class="line2">
          <div class="down-arrow"></div>
        </div>

        
        <div class="icons">
          <!-- Info Icons - Top -->
     
          <div class="top-icons clearfix">
            <div class="bottom-left-iconset">
              <img class="top-icon3" src="assets/img/orange/icons/icon3.png" alt="">
              <p class="icon-text left-text2">courageous</p>
            </div>
            <div class="top-right-iconset">
              <img class="top-icon2" src="assets/img/orange/icons/icon2.png" alt="">
              <p class="icon-text right-text1">inspires creativity</p>
            </div>
            <div class="bottom-right-iconset">
              <img class="top-icon4" src="assets/img/orange/icons/icon4.png" alt="">
              <p class="icon-text right-text2">anti-depressant</p>
            </div>
            <div class="top-left-iconset">
              <img class="top-icon1" src="assets/img/orange/icons/icon1.png" alt="">
              <p class="icon-text left-text1">hoo yeah! enthusiasm</p>
            </div>
          </div>

          
          <!-- Info Icons - Bottom -->
          <div class="bottom-icons clearfix">
            <div class="left-sqs">
              <div class="upper-left-sq">
                <h3><a href="leaf-green.php">12</a></h3>
              </div>
               <div class="upper-right-sq">
                <div class="sm-sq1">0</div>
                <div class="sm-sq2">70</div>
                <div class="sm-sq3">100</div>
                <div class="sm-sq4">0</div>
              </div>
              <div class="bottom-left-sq">
                <h3><a href="sky-blue.php">17</a></h3>
              </div>
              <div class="bottom-right-sq">
                <h3><a href="magenta.php">2</a></h3>
              </div>
            </div>

            <!-- Info Icons - Far Right Col -->
            <div class="right-col">
              <div class="a">255</div>
              <div class="b">77</div>
              <div class="c">0</div>
            </div> 
          </div>
        </div> <!-- end icon section --> 

        <div class="main-text clearfix">
          Orange is a objectively the life of the party. It is witty, humorous, courageous, outgoing and always seems to have a really great story. Sometimes it can be misunderstood, but orange is unmistakably ambitious. Orange was the color of choice for ancient Roman armies and 19th century brides in London. It's the color of hindu priests and protestants in Ireland. Heck, add a little brown or deep red to your orange and just about everyone will like it! Orange is reassuring and tender, but too much orange can feel irresponsible. Physically, Orange stimulates oxygen flow to the brain. It spurs creativity and enthusiasm. It's even a good antidepressant and appetite stimulant, except when you're stressed. When you're stressed out, orange is that annoyingly positive person at the party who won't leave you alone.
        </div>
            
        <div class="right-infographic">
          <h1>what's in a</h1> 
          <span>name?</span>
          <img src="assets/img/infog-line.png" alt="">
          <p>Ancient Romans used the term orange
            to refer to all fruits, which roughly
            translates to &#34;food of the gods.&#34;</p>
          <img src="assets/img/infog-line.png" alt="">
          <img class="half-orange-icon" src="assets/img/orange/half-orange-icon.png" alt="">
        </div> 
      </div> <!-- end main middle section -->

      <!-- Side Menu Right -->
      <nav class="right-nav">
        <a href="amber.php">
          <img class="top-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h5>if you're happy and you know it</h5>
          <img class="bottom-title-line" src="assets/img/nav/nav-title-line.png" alt="title line">
          <h4>amber</h4>
          <img class="right-nav-icon" src="assets/img/nav/amber-icon.png" alt="amber icon">
        </a>
      </nav>

      <div class="page-break">
        <a name="scroll-nav"><img src="assets/img/orange/arrows-transparent.png"></a>
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