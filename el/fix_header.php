<!doctype html>
<html lang="en">
	<head>
		<title>Tab Element</title>
		   
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        
        <meta name="description" content="<?php echo $meta_description; ?>">
        <meta name="keywords" content="<?php echo $meta_keyword; ?>">
        <meta name="theme-color" content="#DEAC23">
        <meta name="author" content="Orion Labs">
        
		<link rel="stylesheet" type="text/css" href="../css/boot_custom.css">
		<link rel="stylesheet" type="text/css" href="../css/global.css">
		<style type="text/css">
			header {
				width: 100%;
				float: left;
				position: fixed;
				top: 0;
				left: 0;
				right: 0;
				background:#fff;
			}
			
			.logo {
				float: left;
			}
			
			.menu {
				float: right;
			}
			
			.menuUl li {
				display: inline-block;
			}
			img.logo_img { height: 40px;}
			.menuUl li a {
				display: block;
				padding: 10px;
				color:#f00;
			}
			.hamburgar span{
				width: 100%;
				height: 4px;
				background: #000;
				margin-bottom: 5px;
				margin-top: 5px;
				display: block;
			}
			.hamburgar{
				height:35px;
				width:35px;
				display:none;
			}
			.header:before, .header:after { content: " "; display: table;}
			@media (max-width:768px){
			.hamburgar{
				display:block;
			}
				.menuUl {
					position: fixed;
					top: 46px;
					right: -260px;
					width: 250px;
					background: #eee;
					bottom: 0;
					transition:all 0.6s
				}
				.menuUl.active{
					right:0;
				}
				.menuUl li {
					display: block;
				}
			}
		</style>
		<script type="text/javascript" src="../js/jquery.min.js"></script>
 <script type="text/javascript">
	$("document").ready(function(){
		$(".hamburgar").click(function(){
			$(".menuUl").toggleClass("active");
			alert();
		});
		
	});
 </script>
	</head>
	<body>
		<!--/*<header>*/-->
			<header>
				<div class="container">
					<div class="logo"><img src="../img/logo.jpg" alt="" class="logo_img" /></div>
					<div class="menu">
						<div class="hamburgar"><span></span><span></span><span></span></div>
						<ul class="menuUl">
							<li><a href="javascript:void(0);">Home</a></li>
							<li><a href="javascript:void(0);">About</a></li>
							<li><a href="javascript:void(0);">Portfolio</a></li>
							<li><a href="javascript:void(0);">Career</a></li>
							<li><a href="javascript:void(0);">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</header>
		<!--/*</header>*/-->
		<article class="section_container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s" style="background:#000;height: 1550px;">
		<!--/*<!--body details*/-->
			<div class="container">
				
			</div>
		<!--/*<!--body details*/-->
		</article>

	</body>
</html>


