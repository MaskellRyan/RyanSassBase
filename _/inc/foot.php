<div class="pagefoot">
	<div class="row">
	<div class="colspan12-4 colspan6-2 colspan2-1 as-grid">
		<ul>
			<li><a href="#">Services</a></li>
			<li><a href="#">Leadership</a></li>
			<li><a href="#">Locations</a></li>
		</ul>
		<ul>
			<li><a href="#">News</a></li>
			<li><a href="#">Links</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
	</div>
	<div class="colspan12-8 colspan6-4 colaspn2-2 as-grid signup-boxes">
		<div class="signup-box grey-box">
			<p class="shell">Signup to get OnBelay news and update emailed to you.</p>
		</div>
		<div class="signup-box orange-box">
			<div class="shell">
				<input type="text" placeholder="E-MAIL">
				<button>Submit</button>
			</div>
		</div>
	</div>
	</div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="_/js/responsive-accordion.min.js"></script>
<script src="_/js/swipe.min.js"></script>
<script type="text/javascript">

	var elem = document.getElementById('slider');
	
	window.mySwipe = Swipe(elem, {
		auto: 6000,
	});
</script>
<script>
	$(document).ready(function(){
		$('.sub-nav').hover(function(){
			$(this).siblings().toggleClass('active');
		});
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

	/*
	By Osvaldas Valutis, www.osvaldas.info
	Available for use under the MIT License
*/



;(function( $, window, document, undefined )
{
	$.fn.doubleTapToGo = function( params )
	{
		if( !( 'ontouchstart' in window ) &&
			!navigator.msMaxTouchPoints &&
			!navigator.userAgent.toLowerCase().match( /windows phone os 7/i ) ) return false;

		this.each( function()
		{
			var curItem = false;

			$( this ).on( 'click', function( e )
			{
				var item = $( this );
				if( item[ 0 ] != curItem[ 0 ] )
				{
					e.preventDefault();
					curItem = item;
				}
			});

			$( document ).on( 'click touchstart MSPointerDown', function( e )
			{
				var resetItem = true,
					parents	  = $( e.target ).parents();

				for( var i = 0; i < parents.length; i++ )
					if( parents[ i ] == curItem[ 0 ] )
						resetItem = false;

				if( resetItem )
					curItem = false;
			});
		});
		return this;
	};
})( jQuery, window, document );

// $( '#nav li:has(ul)' ).doubleTapToGo();
</script>


<script src="_/js/script.min.js"></script>

</body>

</html>