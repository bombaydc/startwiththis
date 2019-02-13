<!doctype html>
<html lang="en">
	<head>
		<title>Tab Element</title>
		
		<link rel="stylesheet" type="text/css" href="../css/boot_custom.css">
		<link rel="stylesheet" type="text/css" href="../css/global.css">
		<style type="text/css">
			.tab_cont_li{display:none;}
			.tab_cont_li.active { display: block;}
			.tab_title_inner_blk li.active { background: #bdbaba;}
			.tab_cont_blk{margin-top:10px;}
		</style>
		<script type="text/javascript" src="../js/jquery.min.js"></script>
 <script type="text/javascript">
	
	function changeTab(el)
	{
		el.parents(".tab_blk").find(".tab_title_inner_blk li").removeClass("active");
		el.addClass("active");
		var index = el.parents(".tab_blk").find(".tab_title_inner_blk li").index(el);
		el.parents(".tab_blk").find(".tab_cont_li").removeClass("active").eq(index).addClass("active");
		console.log(index);
	}
 
	$("document").ready(function(){
		
		$(".tab_title_inner_blk li").on("click", function(e) {
			changeTab($(this));
		});
		
		if(window.location.hash)
		{
			var hash = window.location.hash;
			$(".tab_title_inner_blk li span a[href='"+hash+"']").parents("li").click();
		}
		
		
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
							<li class="active">
								<span><a href="#gir" alt="alt text">Tab 1</a></span>
							</li>
							<li>
								<span><a href="#tab2" alt="alt text">Tab 2</a></span>
							</li>
							<li>
								<span><a href="#krunal" alt="alt text">Tab 3</a></span>
							</li>
							<li>
								<span><a href="#tab4" alt="alt text">Tab 4</a></span>
							</li>
							<li>
								<span><a href="#tab5" alt="alt text">Tab 5</a></span>
							</li>
						</ul>
					</div>
					<div class="tab_cont_blk">
						<div class="tab_cont_inner_blk">
							<div class="tab_cont_li active">Cycle1Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle1Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle1Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle1Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle1Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle1Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle1Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle1Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.</div>
							<div class="tab_cont_li ">Cycle2Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle2Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle2Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle2Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle2Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle2Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle2Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle2Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle2Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle2Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.</div>
							<div class="tab_cont_li ">Cycle3Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle3Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle3Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle3Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle3Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle3Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle3Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle3Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.</div>
							<div class="tab_cont_li ">Cycle4Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle4Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle4Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle4Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle4Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle4Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle4Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle4Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.</div>
							<div class="tab_cont_li ">Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.</div>
						</div>
					</div>
				</div>
				
				
				
				
				
				
				<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
				
				
				
				
				
				
				
				<div class="tab_blk">
					<div class="tab_title_blk">
						<ul class="tab_title_inner_blk list-inline" >
							<li class="active">
								<span><a href="#girish" alt="alt text">Tab 1</a></span>
							</li>
							<li>
								<span><a href="#tab2" alt="alt text">Tab 2</a></span>
							</li>
							<li>
								<span><a href="#tab3" alt="alt text">Tab 3</a></span>
							</li>
							<li>
								<span><a href="#puneet" alt="alt text">Tab 4</a></span>
							</li>
							<li>
								<span><a href="#tab5" alt="alt text">Tab 5</a></span>
							</li>
						</ul>
					</div>
					<div class="tab_cont_blk">
						<div class="tab_cont_inner_blk">
							<div class="tab_cont_li active">Cycle1Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle1Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle1Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle1Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle1Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle1Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle1Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle1Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.</div>
							<div class="tab_cont_li ">Cycle2Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle2Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle2Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle2Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle2Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle2Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle2Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle2Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle2Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle2Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.</div>
							<div class="tab_cont_li ">Cycle3Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle3Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle3Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle3Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle3Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle3Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle3Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle3Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.</div>
							<div class="tab_cont_li ">Cycle4Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle4Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle4Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle4Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle4Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle4Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle4Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle4Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.</div>
							<div class="tab_cont_li ">Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.Cycle5Work initiative I have ignited a movement for adopting cycling as a smart choice for commuting.</div>
						</div>
					</div>
				</div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				<!-- tab style end -->
				
				</div>
		<!--/*<!--body details*/-->
		</article>

	</body>
</html>


