<?php include("includes/header.php"); ?>
  <!-- header -->
  <header>
    <div class="container">
    	<h1><a href="index.html">iWASH</a></h1>
      <nav>
        <ul>
        	<li><a href="index.php" class="current">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="why.php">Why?</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="contacts.php">Contact</a></li>
          <li><a href="reports.php">Reports</a></li>
        </ul>
      </nav>
    </div>
  </header>
<?php include("includes/slideshow.php"); ?> 
  <!-- BODY-->
  <div class="main-box">
    <div class="container">
      <div class="inside">
        <div class="wrapper">
        	<!-- aside -->
          <aside>
            <h2>Adverts <span></span></h2>
            <!-- loopedSlider begin -->
            <div id="loopedSlider">	
              <div class="wrap">
                <div class="slides">
                  <div><a href="#"><img src="images/advert1.jpg" alt=""></a></div>
                  <div><a href="#"><img src="images/advert2.jpg" alt=""></a></div>
                  <div><a href="#"><img src="images/advert3.jpg" alt=""></a></div>
                  <div><a href="#"><img src="images/advert4.jpg" alt=""></a></div>
                  <div><a href="#"><img src="images/advert5.jpg" alt=""></a></div>
                </div>
              </div>
              <ul class="nav-controls">
              	<li><a href="#" class="previous">Previous Ad</a></li>
              	<li><a href="#" class="next">Next Ad</a></li>
              </ul>
            </div>
            <!-- loopedSlider end -->
          </aside>
          <!-- content -->
          <section id="content">
            <article>
            	<h2>Welcome to <span>HAND WASHING SAVES LIVES – CARE (IWASH)</span></h2>
              <p>Hand washing with soap (HWWS) at critical moments reduces the rates of diarrheal diseases by almost 50% and other respiratory diseases by 30%. Tanzania  needs to be a part of the global campaign on promoting hand washing through messages tailored to local contexts.</p>
				<iframe width="572" height="315" src="http://www.youtube.com/embed/zxlQn7KaCNU" frameborder="0" allowfullscreen></iframe>
            </article> 
          </section>
        </div>
      </div>
    </div>
  </div>
  <?php include("includes/footer.php"); ?>