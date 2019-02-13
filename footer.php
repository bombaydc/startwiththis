<div class="scrollup"></div>
	<!-- Start Content Animation Script -->
	<script src="js/wow.js"></script>
	<script>
	wow = new WOW(
	  {
		animateClass: 'animated',
		offset:       100,
		callback:     function(box) {
		  //console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
		}
	  }
	);
	wow.init();
	document.getElementById('moar').onclick = function() {
	  var section = document.createElement('section');
	  section.className = 'section--purple wow fadeInDown';
	  this.parentNode.insertBefore(section, this);
	};
</script>
<!-- End Content Animation Script -->
<!--js file link start -->
<script src="js/slick.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<!--js file link end -->
<script>
$(function () {
  var nua = navigator.userAgent
  var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
  if (isAndroid) {
    $('select.form-control').removeClass('form-control').css('width', '100%')
  }
})
</script>
<!-- Start Script -->
<script type="text/javascript">
	$(function() {
		GLOBAL.init();
	});
</script>
<!-- End Script -->