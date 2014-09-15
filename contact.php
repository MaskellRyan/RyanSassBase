<?php include("_/inc/head.php"); ?>

		<title>Onbelay | Services</title>
		<meta name="description" content="..." />
		<meta name="keywords" content="..." />

</head>
<body>

<?php include("_/inc/nav.php"); ?>
<div class="slide-wrap">
	<div class="headline-wrap">
		<div class="center">
		<h1 class="hero-headline">
			OnBelay Security Solutions provides effective and comprehensive solutions for today’s most complex security problems.
		</h1>
		</div>
	</div>
	<div id='slider' class='swipe'>
	  <div id="slider-pictures" class='swipe-wrap editable'>
	    <div class="repeatable"><img src="media/photos/globe.jpg" alt=""></div>
	  </div>
	</div>
</div>
<section class="row typeset editable">
	
	<div class="colspan12-7 as-grid">
		<h1>Contact OnBelay</h1>
		<p>For questions to OnBelay Security Solutions feel free to submit to us an inquiry by completing the information below and someone will contact you shortly.  If you have an immediate need, please call any of the telephone numbers listed on this page.</p>
	</div>
	<div class="colspan12-5 as-grid with-gutter">

		<h5>OnBelay Headquarters</h5>
		<p>
			OnBelay Security Solutions <br>
			516 E Sherman Ave <br>
			Coeur d Alene, ID 83814 <br>
			<a href="tel+2087658135">Phone: (208) 765-8135</a>
		</p>
	</div>

	</section>
	<section class="row typeset">
	<div class="colspan12-12">
		<form id="contact" action="contact-submit.php" method="post">
			<fieldset>	
				<div class="colspan12-6 colspan6-6 colspan2-2 as-grid formblock">
					<label for="name">Name</label>
					<input required type="text" name="name" placeholder="Full Name" title="Enter your name" class="required">
				</div>

			    <div class="colspan12-6 colspan6-6 colspan2-2 as-grid with-gutter formblock">
					<label for="phone">Phone</label>
					<input type="tel" name="phone" placeholder="ex. (555) 555-5555">
			    </div>

				<div class="formblock clear">
					<label for="email">E-mail</label>
					<input required type="email" name="email" placeholder="yourname@domain.com" title="Enter your e-mail address" class="required email">
				</div>
			    
				<div class="formblock clear">
					<label for="message">Message</label>
					<textarea required name="message" placeholder="Your message" ></textarea>
				</div>
			    
					<input type="submit" name="submit" class="button btn" id="submit" value="Send Message" />
			</fieldset>
		</form>	
	</div>
</section>

<?php include("_/inc/foot.php"); ?>