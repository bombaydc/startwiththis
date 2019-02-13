<!doctype html>
<html lang="en">
   <head>
      <title>slider Element</title>
      <link rel="stylesheet" type="text/css" href="../css/boot_custom.css">
      <link rel="stylesheet" type="text/css" href="../css/global.css">
      <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick.css">
      <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css">
      <style type="text/css">
		.home_slider img{
			width:100%;
		}
      </style>
      <script type="text/javascript" src="../js/jquery.min.js"></script>
      <script type="text/javascript" src="http://kenwheeler.github.io/slick/slick/slick.js"></script>
      <script type="text/javascript">
         $("document").ready(function(){
         	$('.home_slider').slick();
         	$('.four_blk_slider').slick({
				dots: true,
				infinite: true,
				speed: 300,
				slidesToShow: 4,
				slidesToScroll: 4,
				responsive: [
					{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
						infinite: true,
						dots: true
					}
					},
					{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
					},
					{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
					}
					// You can unslick at a given breakpoint now by adding:
					// settings: "unslick"
					// instead of a settings object
				]
			});
			
			
		$('.lazy_slider').slick({
			lazyLoad: 'ondemand',
			slidesToShow: 3,
			slidesToScroll: 1
		});
			
         });
		 
      </script>
   </head>
   <body>
      <!--/*<header>*/-->
      <!--/*</header>*/-->
      <article class="section_container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
         <!--/*<!--body details*/-->
         <div class="container">
			<h2>lazy_slider</h2>
			<div class="lazy_slider">
				<div><img data-lazy="http://wallpapercave.com/wp/LZEdxRW.jpg" alt="" class="img-responsive" /></div>
				<div><img data-lazy="http://www.mrwallpaper.com/wallpapers/Sunset-Art-Background-1366x768.jpg" alt="" class="img-responsive" /></div>
				<div><img data-lazy="https://wallpaperscraft.com/image/the_legend_of_zelda_sword_graphics_background_22303_1366x768.jpg" alt="" class="img-responsive" /></div>
				<div><img data-lazy="http://wallpaperget.com/images/1366x768-wallpaper-24.jpg" alt="" class="img-responsive" /></div>
				<div><img data-lazy="http://www.mrwallpaper.com/wallpapers/Sunset-Art-Background-1366x768.jpg" alt="" class="img-responsive" /></div>
				<div><img data-lazy="http://wallpapercave.com/wp/LZEdxRW.jpg" alt="" class="img-responsive" /></div>
				<div><img data-lazy="http://www.mrwallpaper.com/wallpapers/Sunset-Art-Background-1366x768.jpg" alt="" class="img-responsive" /></div>
				<div><img data-lazy="https://wallpaperscraft.com/image/the_legend_of_zelda_sword_graphics_background_22303_1366x768.jpg" alt="" class="img-responsive" /></div>
				<div><img data-lazy="http://wallpaperget.com/images/1366x768-wallpaper-24.jpg" alt="" class="img-responsive" /></div>
				<div><img data-lazy="http://www.mrwallpaper.com/wallpapers/Sunset-Art-Background-1366x768.jpg" alt="" class="img-responsive" /></div>
			</div>

			<br />
			<h2>home_slider</h2>
			<div class="home_slider">
				<div><img src="http://wallpapercave.com/wp/LZEdxRW.jpg" alt="" class="img-responsive" /></div>
				<div><img src="http://www.mrwallpaper.com/wallpapers/Sunset-Art-Background-1366x768.jpg" alt="" class="img-responsive" /></div>
				<div><img src="https://wallpaperscraft.com/image/the_legend_of_zelda_sword_graphics_background_22303_1366x768.jpg" alt="" class="img-responsive" /></div>
				<div><img src="http://wallpaperget.com/images/1366x768-wallpaper-24.jpg" alt="" class="img-responsive" /></div>
			</div>	
			
			<br />
			<br />
			<h2>four_blk_slider</h2>
			<div class="four_blk_slider">
				<div><img src="http://wallpapercave.com/wp/LZEdxRW.jpg" alt="" class="img-responsive" /></div>
				<div><img src="http://www.mrwallpaper.com/wallpapers/Sunset-Art-Background-1366x768.jpg" alt="" class="img-responsive" /></div>
				<div><img src="https://wallpaperscraft.com/image/the_legend_of_zelda_sword_graphics_background_22303_1366x768.jpg" alt="" class="img-responsive" /></div>
				<div><img src="http://wallpaperget.com/images/1366x768-wallpaper-24.jpg" alt="" class="img-responsive" /></div>
				<div><img src="http://www.mrwallpaper.com/wallpapers/Sunset-Art-Background-1366x768.jpg" alt="" class="img-responsive" /></div>
			</div>
			
         </div>
         <!--/*<!--body details*/-->
      </article>
   </body>
</html>