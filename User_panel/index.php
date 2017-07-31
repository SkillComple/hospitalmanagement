<!-- header -->
<?php include 'inc/header.php';?>
<!-- header -->
<!-- //about -->
<?php include 'inc/content-view.php';?>
<!-- about -->
<!-- if service needed -->
<!-- include 'inc/service.php'; -->
<!-- if service needed -->

<!-- product view -->
<?php include 'inc/product.php';?>
<!-- product view -->

<!-- //laboratory-section -->
<!-- team -->
<?php include 'inc/author.php';?>
<!-- //team -->

<!-- Appointment -->
<?php include 'inc/appointment.php';?>
<!-- //Appointment -->
	<!-- //modal -->

<!-- contact -->
<?php include 'inc/contact.php';?>
<!-- //contact -->
<!-- footer-->
<?php include 'inc/footer.php';?>
<!-- footer-->
<script src="js/jarallax.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript">
	/* init Jarallax */
	$('.jarallax').jarallax({
		speed: 0.5,
		imgWidth: 1366,
		imgHeight: 768
	})
</script>
<!-- here starts scrolling icon -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- /ends-smoth-scrolling -->
	<!-- //here ends scrolling icon -->
	<!--start-date-piker-->
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<script src="js/jquery-ui.js"></script>
			<script>
				$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
				});
			</script>
<!-- //End-date-piker -->
<!-- here starts scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear'
					};
				*/

				$().UItoTop({ easingType: 'easeOutQuart' });

				});
		</script>
<!--tabs-->
		<script src="js/easy-responsive-tabs.js"></script>
		<script>
		$(document).ready(function () {
		$('#horizontalTab').easyResponsiveTabs({
		type: 'default', //Types: default, vertical, accordion
		width: 'auto', //auto or any width like 600px
		fit: true,   // 100% fit in a container
		closed: 'accordion', // Start closed if in accordion view
		activate: function(event) { // Callback function if tab is switched
		var $tab = $(this);
		var $info = $('#tabInfo');
		var $name = $('span', $info);
		$name.text($tab.text());
		$info.show();
		}
		});
		$('#verticalTab').easyResponsiveTabs({
		type: 'vertical',
		width: 'auto',
		fit: true
		});
		});
		</script>
<!--//tabs-->
</body>
</html>
