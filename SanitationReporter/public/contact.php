<?php include("../includes/header.php"); ?>
<body data-spy="scroll">
<!-- MAIN CONTENT -->
<div class="container content container-fluid" id="home">

<?php include("../includes/navigation.php"); ?>
<!-- CONTACT -->
	<div class="row-fluid" id="contact">
	
		<h2 class="page-title" id="scroll_up">
				Contact
				<a href="#home" class="arrow-top">
				<img src="img/arrow-top.png">
				</a>
			</h2>
		
		<!-- CONTACT INFO -->
		<div class="span4" id="contact-info">
			<h3>Contact Us</h3>
			<p>FlexApp is free and thus unfortunately we cannot provide basic support for it. We simply don't have the time to answer everyone's questions.</p>
			<p>However, you may contact us about general business inquiries or to report bugs in the template!<p>
			<p><a href="mailto:contact@trippoinc.com">contact@trippoinc.com</a></p>
		</div>
		
		<!-- CONTACT FORM -->
		<div class="span7" id="contact-form">
			<form class="form-horizontal" method="get">
                <fieldset>
					<div class="control-group">
						<label class="control-label" for="name">Name</label>
						<div class="controls">
							<input class="input-xlarge" type="text" id="name" placeholder="John Doe">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="email">Email</label>
						<div class="controls">
							<input class="input-xlarge" type="text" id="email" placeholder="john@gmail.com">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="subject">Subject</label>
						<div class="controls">
							<input class="input-xlarge" type="text" id="subject" placeholder="General Inquiry">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="message">Message</label>
						<div class="controls">
							<textarea class="input-xlarge" rows="3" id="message" placeholder="Your message..."></textarea>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">SEND</button>
					</div>
				</fieldset>
			</form>
		</div>
		
	</div>
</div>
</div>
<?php include("../includes/footer.php"); ?>