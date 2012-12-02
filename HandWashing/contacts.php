<?php include("includes/header.php"); ?>
  <!-- header -->
  <header>
    <div class="container">
    	<h1><a href="index.html">iWASH</a></h1>
      <nav>
        <ul>
        	<li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="why.php">Why?</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="contacts.php" class="current">Contact</a></li>
          <li><a href="reports.php">Reports</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- BODY-->
  <div class="main-box">
    <div class="container">
      <div class="inside">
        <div class="wrapper">
        	<!-- aside -->
          <aside>
            <h2>Our <span>Contacts</span></h2>
            <!-- .contacts -->
            <ul class="contacts">
            	<li><strong>Zip Code:</strong>50122</li>
              <li><strong>Country:</strong>USA</li>
              <li><strong>City:</strong>New York</li>
              <li><strong>Telephone 1:</strong>+354 5635600</li>
              <li><strong>Fax:</strong>+354 5635620</li>
              <li><strong>Email:</strong><a href="#">businessco@mail.com</a></li>
            </ul>
            <!-- /.contacts -->
            <h3>Miscellaneous info:</h3>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.
          </aside>
          <!-- content -->
          <section id="content">
            <article>
            	<h2>Contact <span>Form</span></h2>
              <form id="contacts-form" action="" method="post">
                <fieldset>
                  <div class="field">
                    <label>Your Name:</label>
                    <input type="text" value=""/>
                  </div>
                  <div class="field">
                    <label>Your E-mail:</label>
                    <input type="email" value=""/>
                  </div>
                  <div class="field">
                    <label>Your Website:</label>
                    <input type="url" value=""/>
                  </div>
                  <div class="field">
                    <label>Your Message:</label>
                    <textarea></textarea>
                  </div>
                  <div><a href="#" onclick="document.getElementById('contacts-form').submit()">Send Your Message!</a></div>
                </fieldset>
              </form>
            </article> 
          </section>
        </div>
      </div>
    </div>
  </div>
  <?php include("includes/footer.php"); ?>