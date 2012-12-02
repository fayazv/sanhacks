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
            <p>Please, do not hesitate to contact us, we are friendly people: info@iwash.com</p>
			<p>If you have a feature or support request, or want to give us feedback, please contact us.If you want to be updated about the development of iwash and the current service status you can follow @iwash on Twitter.</p>
	 <p>You can also contact us for services or consulting. We offer not only deep PDF expertise but also many years' professional experience in a wide variety of technologies.</p>
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