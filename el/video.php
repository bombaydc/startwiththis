<!doctype html>
<html lang="en">
	<head>
		<title>cards Element</title>
		
		<link rel="stylesheet" type="text/css" href="../css/boot_custom.css">
		<link rel="stylesheet" type="text/css" href="../css/global.css">
		<style type="text/css">
			video{width:100%;}
			.video_container{
				overflow:hidden;
				position:relative;
			}
			.video_container{
				position: fixed;
				top: 0;
				right: 0;
				bottom: 0;
				left: 0;
				overflow: hidden;
				z-index: -100;
			}
			video {
				position: fixed;
				top: 0;
				left: 0;
				right:0;
				bottom:0;
				width: 100%;
				height: 100%;
				z-index: -5;
			}
			video::-internal-media-controls-download-button {display:none;}
			video::-webkit-media-controls-enclosure {overflow:hidden;}
			video::-webkit-media-controls-panel {width: calc(100% + 30px); /* Adjust as needed */}
			
			
		</style>
		<script type="text/javascript" src="../js/jquery.min.js"></script>
	 <script type="text/javascript">
		$("document").ready(function(){
			var winHeight = $(window).outerHeight();
			$(".video_container").height(winHeight);
			
		});
	 </script>
	</head>
	<body style="background:#eee;">
		<!--/*<header>*/-->
		<!--/*</header>*/-->
		<article class="section_container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
			<!--/*<!--body details*/-->
				<div class="video_container">
					<video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid"  onclick="this.paused?this.play():this.pause();"  preload="auto" playsinline autoplay data-autoplay muted loop controls>
						<source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">
						<source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">
					</video>
				</div>
				<div class="container">
					dfsghdf;lkghj sfrtgdfs;gjd dfrtgdfgfdjlset sdftsrtsrdkjlxcvfg stgsdlkfndslknfsresdfds
				</div>
			<!--/*<!--body details*/-->
		</article>

	</body>
</html>


