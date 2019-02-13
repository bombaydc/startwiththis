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
			.overlay {
				position: fixed;
				z-index: 17;
				background: rgba(0, 0, 0, 0.63);
				top: 0;
				right: 0;
				left: 0;
				bottom: 0;
				display:none;
			}
			.popup_img_container {
				height:auto;
				position: fixed;
				z-index: 9999;
				top: 50%;
				left: 0%;
				right: 0;
				-ms-transform: translate(0%, -50%);
				-moz-transform: translate(0%, -50%);
				-webkit-transform: translate(0%, -50%);
				transform: translate(0%, -50%);
				width:auto;
				display:none;
			}
			.popup_img_container .popup_container_img_blk{
				height: auto;
				width: auto;
				margin: 0 auto;
				display: table;
				background: #fff;
				padding:5px;
				border-radius:5px;
			}
			.nextPrevButton.prev {
				left: 15px;
			}
			.nextPrevButton.next {
				right: 15px;
			}
			.nextPrevButton {
				position:absolute;
				top: 45%;
				z-index: 99;
				color: #fff;
				font-size: 50px;
				cursor: pointer;
				padding: 0 20px;
				display: none;
			}
			.nextPrevButton:hover {color: #08bfd7;}
			.gallery_img {
				max-width: 100%;
				position: absolute;
				top: 50%;
				left: 50%;
				max-width: 100%;
				transform: translate(-50% ,-50%);	
			}
			
			.gallery_list {
				width: 25%;
				float: left;
				padding:5px;
			}
			.imgOverlay {
				position:absolute;
				
				top:0;
				right:0;
				left:0;
				bottom:0;
				margin:auto;
				width:100%;
				height:100%;
				-webkit-transition:all 0.3s;
				-moz-transition:all 0.3s;
				-ms-transition:all 0.3s;
				-o-transition:all 0.3s;
				transition:all 0.3s;
				-webkit-transform: scale(0);
				-moz-transform: scale(0);
				-ms-transform: scale(0);
				transform: scale(0);
				z-index: 1;
				border:1px solid #fff;
			}
			.gallery_list:hover .imgOverlay {
				-webkit-transform: scale(0.95);
				-moz-transform: scale(0.95);
				-ms-transform: scale(0.95);
				transform: scale(0.95);
			} 
			.gallery_list:hover img {
				filter:grayscale(100%);
			}
			.gallery_blk {
				float: left;
				width: 100%;
			}
			.gallery_list_blk {
				float: left;
				width: 100%;
			}
			.gallery_list_inner {
				overflow: hidden;
				position: relative;
				border-radius: 3px;
				height: 160px;
			}
			
			.nextPrevButton i {
				display: block;
				width: 30px;
				height: 30px;
				background: #fff;
			}
		</style>
		<script type="text/javascript" src="../js/jquery.min.js"></script>
	</head>
	<body>
		<!--/*<header>*/-->
		<!--/*</header>*/-->
		<article class="section_container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s" >
		<!--/*<!--body details*/-->
		<div class="overlay"></div>
			<div class="container">
				<div class="gallery_blk">
					<div class="popup_img_container" > 
						<span class="nextPrevButton prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> </span>
						<span class="nextPrevButton next" > <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
						<div class="popup_container_img_blk">
							<img src="" alt="" class="">
						</div>
					</div>
					
					<div class="gallery_list_blk">
						<div class="gallery_list">
							<div class="gallery_list_inner">
								<div class="imgOverlay"></div>
								<img src="../img/slider1.jpg" data-src="../img/slider1.jpg" alt="" class="gallery_img" style="display: block;">
							</div>
						</div>
						<div class="gallery_list">
							<div class="gallery_list_inner">
								<div class="imgOverlay"></div>
								<img src="../img/slider2.jpg" data-src="../img/slider2.jpg" alt="" class="gallery_img" style="display: block;">
							</div>
						</div>
						<div class="gallery_list">
							<div class="gallery_list_inner">
								<div class="imgOverlay"></div>
								<img src="../img/slider3.jpg" data-src="../img/slider3.jpg" alt="" class="gallery_img" style="display: block;">
							</div>
						</div>
						<div class="gallery_list">
							<div class="gallery_list_inner">
								<div class="imgOverlay"></div>
								<img src="../img/slider2.jpg" data-src="../img/slider2.jpg" alt="" class="gallery_img" style="display: block;">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!--/*<!--body details*/-->
		</article>

 <script type="text/javascript">
	var GALLERY_PAGE = {
		
		galleryIndex : null,
		galleryLength : null,
		winWidth : $(window).width(),
		winHeight : $(window).outerHeight(),
		popup: null,
		
		init:function()
		{
			//alert(GLOBAL.winWidth);
			GALLERY_PAGE.galleryLength = $(".gallery_list_blk .gallery_list_inner").length - 1;
			
			GALLERY_PAGE.events();
			$(window).resize(function(){ GALLERY_PAGE.resize(); });
			$(window).load(function(){ GALLERY_PAGE.load(); });
		},
		events: function()
		{
			
			
			$(".gallery_list_blk .gallery_list_inner").click(function(e){
				e.preventDefault();
				e.stopPropagation();
				GALLERY_PAGE.galleryIndex = $(".gallery_list_blk .gallery_list_inner").index(this);
				
				//alert(GALLERY_PAGE.galleryIndex);
				
				$(".overlay").fadeIn();
				
				GALLERY_PAGE.popup = $(this).parents(".gallery_blk").find(".popup_img_container");
				GALLERY_PAGE.popup.find("img").show();
				alert(GALLERY_PAGE.popup.find("img").show().length)
				$(".gallery_list_blk .gallery_list_inner").removeClass("active");
				$(this).addClass("active");
					
				
				GALLERY_PAGE.setImgSize(GALLERY_PAGE.popup);
				
				//console.log(GALLERY_PAGE.galleryIndex);
				
				
				if(GALLERY_PAGE.galleryIndex == 0 )
				{
					$(".prev").hide();
					$(".next").show();
				}
				else if (GALLERY_PAGE.galleryIndex == GALLERY_PAGE.galleryLength)
				{
					$(".next").hide();
					$(".prev").show();
				}
				else
				{
					$(".next").show();
					$(".prev").show();
				}
			});
			
			$(".gallery_blk .popup_img_container .nextPrevButton").click(function(e){
				
				e.preventDefault();
				e.stopPropagation();
				
				GALLERY_PAGE.popup = $(this).parents(".gallery_blk").find(".popup_img_container");
				
				if($(this).hasClass("prev"))
				{
					GALLERY_PAGE.galleryIndex = GALLERY_PAGE.galleryIndex - 1;
					
					GALLERY_PAGE.popup.find("img").attr("src", $(".gallery_list_blk .gallery_list_inner").find("img").eq(GALLERY_PAGE.galleryIndex).data("src"));
					
					if (GALLERY_PAGE.galleryIndex == 0){
						$(".prev").hide();
					}
					
					$(".next").show();
				}
				
				else if($(this).hasClass("next"))
				{
					GALLERY_PAGE.galleryIndex = GALLERY_PAGE.galleryIndex + 1;
					
					GALLERY_PAGE.popup.find("img").attr("src", $(".gallery_list_blk .gallery_list_inner").find("img").eq(GALLERY_PAGE.galleryIndex).data("src"));
					
					if(GALLERY_PAGE.galleryIndex == GALLERY_PAGE.galleryLength)
					{
						$(".next").hide();
					}
					
					$(".prev").show();
				}
				
				
				$(".gallery_list_blk .gallery_list_inner").removeClass("active");
				$(".gallery_list_blk .gallery_list_inner").eq(GALLERY_PAGE.galleryIndex).addClass("active");
				
				
				
			});
			
			$(".overlay, .popup_img_container").click(function(){
				$(".overlay").fadeOut();
				$(".popup_img_container").fadeOut();
				
				GALLERY_PAGE.popup = null;
				
			});
		},
		
		resize:function()
		{
			GALLERY_PAGE.winWidth = $(window).width(),
			GALLERY_PAGE.winHeight = $(window).outerHeight();
			if(GALLERY_PAGE.popup){
				GALLERY_PAGE.setImgSize(GALLERY_PAGE.popup);
			}
			
		},
		
		load:function()
		{
			
		},
		setImgSize:function(popup)
		{
			//alert($(".gallery_list_blk .gallery_list_inner.active").length)
			
			popup.css({"display":"block","visibility":"hidden"});
			popup.find("img").attr("src", $(".gallery_list_blk .gallery_list_inner.active").find("img").data("src"));
			
			
			var imgheight = popup.find("img").height();
			var imgwidth = popup.find("img").width();
			
			var imgratio = imgwidth/imgheight;
			var screenratio = GALLERY_PAGE.winWidth/GALLERY_PAGE.winHeight;
			
			if(screenratio >= imgratio)
			{
				popup.find("img").height(GALLERY_PAGE.winHeight * .8);
				popup.find("img").css({"width":"auto"});
			}
			else{
				
				popup.find("img").width(GALLERY_PAGE.winWidth * .8);
				popup.find("img").css({"height":"auto"});
			}
			
			popup.css({"visibility":"visible"});
		}
	}

	$("document").ready(function(){
		GALLERY_PAGE.init();
	});
</script>
	</body>
</html>


