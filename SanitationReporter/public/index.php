<?php include("../includes/header.php"); ?>
<body data-spy="scroll">
<!-- MAIN CONTENT -->
<div class="container content container-fluid" id="home">

<?php include("../includes/navigation.php"); ?>
	<!-- HOME -->
	<div class="row-fluid">
  
		<!-- PHONES IMAGE FOR DESKTOP MEDIA QUERY -->
		<div class="span5 visible-desktop">
			<img src="img/phones.png">
		</div>
	
		<!-- APP DETAILS -->
		<div class="span7">
	
			<!-- ICON -->
			<div class="visible-desktop" id="icon">
				<img src="img/app_icon.png" />
			</div>
			
			<!-- APP NAME -->
			<div id="app-name">
				<h1>SanReporter</h1>
			</div>
			
			<!-- VERSION -->
			<div id="version">
				<span class="version-top label label-inverse">Version 1.0</span>
			</div>
            
			<!-- TAGLINE -->
			<div id="tagline">
				A Free Responsive Website
			</div>
		
			<!-- PHONES IMAGE FOR TABLET MEDIA QUERY -->
			<div class="hidden-desktop" id="phones">
				<img src="img/phones.png">
			</div>
            
			<!-- DESCRIPTION -->
			<div id="description">
				Sanitation Reporter is a wesite that can be used by children in schools to report on the condition of their WASH facilities.
			</div>
            
			<!-- FEATURES -->
			<ul id="features">
				<li>Fully Responsive App</li>
			</ul>
		
			<!-- DOWNLOAD & REQUIREMENT BOX -->
			<!--<div class="download-box">
				<a href="#"><img src="img/available-on-the-app-store.png"></a>
			<div class="download-box">
				<strong>Requirements:</strong><br>
				Compatible with iPhone and iPod touch. Requires iPhone OS 2.2 or later. WiFi, Edge, or 3G network connection sometimes required.
			</div>
            </div>-->
			<div class="download-box">
				<a href="#"><img src="img/android_app_on_play_logo_large.png"></a>
			</div>

			<div class="download-box">
				<strong>Requirements:</strong><br>
				Requires Android 2.3 and higher. WiFi, Edge, or 3G network connection sometimes required.
			</div>
			
		</div>
	</div>
	
</div>
<?php include("../includes/footer.php"); ?>