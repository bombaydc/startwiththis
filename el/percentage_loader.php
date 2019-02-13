<!doctype html>
<html lang="en">
	<head>
		<title>Tab Element</title>
		
		<link rel="stylesheet" type="text/css" href="../css/boot_custom.css">
		<link rel="stylesheet" type="text/css" href="../css/global.css">
		<style type="text/css">
			.progress_bar {width:0%;position: absolute;top: 0;left: 0;right: 0;background: #2074cc;height: 10px;z-index:9999;}
			#loading {
				position: fixed;
				top: 0;
				bottom: 0;
				right: 0;
				left: 0;
				margin: auto;
				display: inline-block;
				width: 100%;
				height: 100%;
				background: #002365;
				z-index: 9999999;
				text-align: center;
				vertical-align: middle;
			}
		</style>
		<script type="text/javascript" src="../js/jquery.min.js"></script>
	 <script type="text/javascript">
		$("document").ready(function(){
			
			
			/* LOADING */
			var ImgArray = [];
			var demoImgArray = [];
			
			
			$("img").each(function(i){
				demoImgArray.push($(this).attr("src"));
			});
			//console.log(demoImgArray.length + "    " + demoImgArray);
			
			$.each(demoImgArray, function(i, el){
				if($.inArray(el, ImgArray) === -1) ImgArray.push(el);
			});
			
			
			
			
			
			/* LOADING */
			
			// Call function to load array of images
			preload(ImgArray);
		});
		
		function preload(imgArray) {
			var increment = Math.floor(100 / imgArray.length);
			var $progress = $('.progress-bar');
			var pc = 0;
			//$.each(imgArray, function(i, el) {
			//	console.log(el)
			//	alert(i)
				$('img').each(function (i,el){
					alert(el)
					el.load(function() {
						pc = pc + increment;
						console.log("pc = " + pc);
						//$progress.animate({	width: pc + "%" }, 100);
						//console.log(this)
					});
				});
			//});
		}

		//$(window).load(function(){ 
		//
		//	/* WHEN LOADED */
		//	$('.progress-bar').animate({width: "100%"}, 1000, function() {
		//		alert("loaded");
		//		$("#loading").fadeOut();
		//	});
		//	/* WHEN LOADED */
		//});
	 </script>
	</head>
	<body>
		<!--/*<header>*/-->
		<!--/*</header>*/-->
		<article class="section_container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
		<!--/*<!--body details*/-->
			<div class="container">
				<div id="loading">
					<div class="progress_bar"></div> 
				</div>
				<img src="http://aksharsolution.com/client/natani/images/product/cys_mortice_handle_set/cys_mortice_handle_set.jpg" alt="" class="img-responsive" />
				<img src="http://aksharsolution.com/client/natani/images/product/cy_mortice_handle/cy_mortice_handle.jpg" alt="" class="img-responsive" />
				<img src="http://aksharsolution.com/client/natani/images/product/door_pull_handle_on_rose/door_pull_handle_on_rose.jpg" alt="" class="img-responsive" />
				<img src="http://natanitraders.com/admin/upload/1500106545cy_mortice_body_cylinder_baby_lock.jpg" alt="" class="img-responsive" />
				<img src="http://natanitraders.com/images/section_banner.jpg" alt="" class="img-responsive" />
				<img src="http://natanitraders.com/admin/upload/1500059901aldrop_kits.jpg" alt="" class="img-responsive" />
				<img src="http://natanitraders.com/admin/upload/1500059990dead_lock_sliding_lock.jpg" alt="" class="img-responsive" />
				<img src="http://natanitraders.com/admin/upload/1500060092cy_mortice_body_cylinder_baby_lock.jpg" alt="" class="img-responsive" />
				<img src="http://natanitraders.com/admin/upload/1500060152cys_mortice_handle_set.jpg" alt="" class="img-responsive" />
			</div>
		<!--/*<!--body details*/-->
		</article>

	</body>
</html>


