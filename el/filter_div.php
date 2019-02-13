<!doctype html>
<html lang="en">
	<head>
		<title>Tab Element</title>
		
		<link rel="stylesheet" type="text/css" href="../css/boot_custom.css">
		<link rel="stylesheet" type="text/css" href="../css/global.css">
		<style type="text/css">
			/*.tab_cont_li{display:none;}*/
			.container{padding-top: 30px;}
			.tab_cont_li{font-size: 13px; border: 1px solid #ccc; margin-bottom: 5px; padding: 5px;}
			.tab_cont_li.active { display: block;}
			.tab_title_inner_blk li.active { background: #bdbaba;}
			.tab_cont_blk{margin-top:10px;}
		</style>
		<script type="text/javascript" src="../js/jquery.min.js"></script>
 <script type="text/javascript">

	$("document").ready(function(){
		var dataAtt = $('[data-ref]');		
		$(".tab_title_inner_blk li").on("click", function(e) {
			var el = $(this).data('ref');
			var dataAtt = $('[data-ref]');
			$(".tab_cont_inner_blk .tab_cont_li").slideUp();
			$(".tab_cont_inner_blk").find('.'+el).slideDown();
			//alert($(".tab_cont_inner_blk").find('.'+el).length());
		});
		
		// $(".tab_title_inner_blk li").on("click", function(e) {
		// 	changeTab($(this));
		// });
		
		// if(window.location.hash)
		// {
		// 	var hash = window.location.hash;
		// 	$(".tab_title_inner_blk li span a[href='"+hash+"']").parents("li").click();
		// }
		
		
	});
 </script>
	</head>
	<body>
		<!--/*<header>*/-->
		<!--/*</header>*/-->
		<article class="section_container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
		<!--/*<!--body details*/-->
			<div class="container">
				<!-- <div class="home_slider">						
					<div><img src="img/slider1.jpg" alt="" class="img-responsive" /></div>
					<div><img src="img/slider2.jpg" alt="" class="img-responsive" /></div>
					<div><img src="img/slider3.jpg" alt="" class="img-responsive" /></div>
				</div>
				 -->
				
								
				<!-- tab style -->
				<div class="tab_blk">
					<div class="tab_title_blk">
						<ul class="tab_title_inner_blk list-inline" >
							<li class="" data-ref="all">
								<span><a href="#gir" alt="alt text">All</a></span>
							</li>
							<li class="" data-ref="abc">
								<span><a href="#gir" alt="alt text">abc</a></span>
							</li>
							<li class="" data-ref="efg">
								<span><a href="#tab2" alt="alt text">efg</a></span>
							</li>
							<li class="" data-ref="hij">
								<span><a href="#krunal" alt="alt text">hij</a></span>
							</li>
							<li class="" data-ref="kln">
								<span><a href="#tab4" alt="alt text">kln</a></span>
							</li>
							<li class="" data-ref="opq">
								<span><a href="#tab5" alt="alt text">opq</a></span>
							</li>
						</ul>
					</div>
					<div class="tab_cont_blk">
						<div class="tab_cont_inner_blk">
							<div class="tab_cont_li all abc"> <b>abc</b> Cycle1Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle1Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.</div>
							<div class="tab_cont_li all efg"> <b>efg</b> Cycle2Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle2Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle2Work initiative I have ignited a movement</div>
							<div class="tab_cont_li all hij"> <b>hij</b> Cycle3Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle3Work initiative I have ignited a moveme</div>
							<div class="tab_cont_li all kln"> <b>kln</b> Cycle4Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle4Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle4Work initiative I have ignited </div>
							<div class="tab_cont_li all abc"> <b>abc</b> Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.</div>
							<div class="tab_cont_li all opq"> <b>opq</b> Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.</div>
							<div class="tab_cont_li all efg"> <b>efg</b> Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.</div>
							<div class="tab_cont_li all hij"> <b>hij</b> Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.</div>
							<div class="tab_cont_li all kln"> <b>kln</b> Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.</div>
							<div class="tab_cont_li all opq"> <b>opq</b> Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.</div>
							<div class="tab_cont_li all efg"> <b>efg</b> Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.</div>
							<div class="tab_cont_li all hij"> <b>hij</b> Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.</div>
							<div class="tab_cont_li all kln"> <b>kln</b> Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.</div>
							<div class="tab_cont_li all abc"> <b>abc</b> Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.</div>
						</div>
					</div>
				</div>
				
				
				<!-- tab style end -->
				
				</div>
		<!--/*<!--body details*/-->
		</article>

	</body>
</html>


