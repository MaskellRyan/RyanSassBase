
<div class="row" id="contact">
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

<footer class="pagefoot">
	<div class="row">
		<ul class="social-links">
			<li><a href="#"><img src="_/img/facebook.png" alt="facebook"></a></li>
			<li><a href="#"><img src="_/img/twitter.png" alt="twitter"></a></li>
			<li><a href="#"><img src="_/img/google.png" alt="google"></a></li>
			<li><a href="#"><img src="_/img/linkedin.png" alt="linkedin"></a></li>
			<li><a href="#"><img src="_/img/youtube.png" alt="youtube"></a></li>
			<li><a href="#"><img src="_/img/tumblr.png" alt="tumblr"></a></li>
		</ul>
		® RyanSassBase
	</div>
</footer>



<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<script src="_/js/responsive-nav.min.js"></script>
<script src="_/js/responsive-accordion.min.js"></script>
<script src="_/js/swipe.min.js"></script>
<script type="text/javascript">
var navigation = responsiveNav(".nav-collapse", {
	customToggle: "#nav-toggle"
});

var elem = document.getElementById('slider');

window.mySwipe = Swipe(elem, {
	auto: 6000,
});
</script>


<script src="_/js/jquery.validate.min.js"></script>
<script src="_/js/jquery.placeholder.min.js"></script>
<script src="_/js/jquery.form.min.js"></script>
<script>
$(function(){
	$('#contact').validate({
		submitHandler: function(form) {
			$(form).ajaxSubmit({
				url: 'contact-submit.php',
				success: function() {
					$('#contact').hide();
					$('#contact-form').append("<p class='thanks'>Thanks! Your request has been sent.</p>")
				}
			});
		}
	});
});
</script>

<script src="_/js/plugins.min.js"></script>
<script src="_/js/jquery.finalTilesGallery.min.js"></script>
<script src="_/js/imagesloaded.min.js"></script>
<script src="_/js/headhesive.min.js"></script>
<script src="_/js/bind-polyfill.min.js"></script>
<script src="_/js/smooth-scroll.min.js"></script>
<script src="_/js/script.min.js"></script>

<script>
$(document).ready( function() {

	smoothScroll.init();

	var options = {
		offset: '#showHere',
		classes: {
			clone:   'banner--clone',
			stick:   'banner--stick',
			unstick: 'banner--unstick'
		}
	};
	var banner = new Headhesive('.banner', options);


	$('#gallery-items li').each(function(){
		var theTag = $(this).find('img').attr('alt').replace(" ", "-");

		if ( theTag != '') {
			$(this).addClass( 'ftg-' + theTag );
		}

		var theLink = $(this).find('a').attr('href');

		if ( theLink != '') {
			$(this).find('img').attr('src', theLink);
		}
	});

       	// Don't execute if we're in the Live Editor
       	if( !window.isCMS ) {

       		$('#gallery-items li').addClass('tile');
       		$('#gallery-items li a').addClass('tile-inner');
       		$('#gallery-items li a img').addClass('item');

       		if ($(window).width() > 960) {
       			$('#gallery').finalTilesGallery({
       				gridCellSize: 5,
       				minTileWidth: 100,
       				imageSizeFactor: .8,
       				hoverEffect: 'slide-left',
       				scrollEffect: 'slide'
       			});
       		} else {
       			$('#gallery').finalTilesGallery({
       				gridCellSize: 5,
       				minTileWidth: 100,
       				imageSizeFactor: .2,
       				hoverEffect: 'slide-left',
       				scrollEffect: 'slide'
       			});
       		}
       		$(".tile a").magnificPopup({
       			type: 'image'
       		});
       	}

       });
</script>



</body>

</html>