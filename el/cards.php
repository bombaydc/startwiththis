<!doctype html>
<html lang="en">
	<head>
		<title>cards Element</title>
		
		<link rel="stylesheet" type="text/css" href="../css/boot_custom.css">
		<link rel="stylesheet" type="text/css" href="../css/global.css">
		<style type="text/css">
			.fullwidth_cars, .thumbnail_card{float:left; width:100%; margin-bottom:15px;}
		
		
			.cards_left_right_main_blk {
				width: 100%;
				float: left;
			}
			
			.card {
				background: #fff;
				float: left;
				width: 100%;
				border-radius: 5px;   
				margin-bottom: 15px;
			}
			
			.cards_left_right_inner_blk {
				padding: 10px;
			}
			
			.cards_left_blk {
				float: left;
				width: 30%;
			}
			
			.cards_inner_blk {
				padding: 15px;
			}
			
			.cards_right_blk {
				float: left;
				width: 70%;
			}
			
			.read_more_blk { cursor:pointer; }
			
			.fullwidth_cars .read_more_expand{
				height:140px;
				overflow:hidden;
			}
			.fullwidth_cars .cards_left_right_main_blk:nth-child(1) .read_more_expand{
				height:60px;
				overflow:hidden;
			}
			.fullwidth_cars .cards_left_right_main_blk:nth-child(2) .read_more_expand{
				height:20px;
				overflow:hidden;
			}
			.read_more_expand.expand{
				height:auto;
			}
		</style>
		<script type="text/javascript" src="../js/jquery.min.js"></script>
	 <script type="text/javascript">
		$("document").ready(function(){
			
			
			
			$(".read_more_js").parent(".expand_parent_cont_js").find(".read_more_expand").each(function(){
				$(this).data("originalHeight", $(this).height());
			});
			
			$(".read_more_js").click(function(){
				var el = $(this).parent(".expand_parent_cont_js").find(".read_more_expand");
				//el.toggleClass("expand");
				
				
				if(!$(this).hasClass("active"))
				{
					$(this).addClass("active").find("span").text("Read Less");
					el.animate({height: el.get(0).scrollHeight}, 1000, function(){
						$(this).height('auto');
					});
				}
				else
				{
					el.animate({height: el.data("originalHeight")}, 1000);
					$(this).removeClass("active").find("span").text("Read More");
				}
			});
		});
	 </script>
	</head>
	<body style="background:#eee;">
		<!--/*<header>*/-->
		<!--/*</header>*/-->
		<article class="section_container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
		<!--/*<!--body details*/-->
			<div class="container">
				
				<div class="fullwidth_cars">
					<div class="cards_left_right_main_blk">
						<div class="card cards_left_right_inner_blk">
							<div class="cards_left_blk">
								<div class="cards_inner_blk">
									<div class="cards_img_blk">
										<img src="http://natanitraders.com/admin/upload/1500060152cys_mortice_handle_set.jpg" alt="" class="img-responsive" />
									</div>
								</div>
							</div>
							
							<div class="cards_right_blk">
								<div class="cards_inner_blk expand_parent_cont_js">
									<h2 class="card_title">Lorem Ipsum is simply dummy text of Lorem Ipsum is simply dummy text of</h2>
									<div class="card_cont_blk  read_more_expand">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
										
									</div>
									<div class="read_more_blk read_more_js"><span>Read More</span></div>
								</div>
							</div>
						</div>
					</div>
					<div class="cards_left_right_main_blk">
						<div class="card cards_left_right_inner_blk">
							<div class="cards_left_blk">
								<div class="cards_inner_blk">
									<div class="cards_img_blk">
										<img src="http://natanitraders.com/admin/upload/1500060152cys_mortice_handle_set.jpg" alt="" class="img-responsive" />
									</div>
								</div>
							</div>
							
							<div class="cards_right_blk">
								<div class="cards_inner_blk expand_parent_cont_js">
									<h2 class="card_title">Lorem Ipsum is simply dummy text of Lorem Ipsum is simply dummy text of</h2>
									<div class="card_cont_blk  read_more_expand">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
										
									</div>
									<div class="read_more_blk read_more_js"><span>Read More</span></div>
								</div>
							</div>
						</div>
					</div>
					<div class="cards_left_right_main_blk">
						<div class="card cards_left_right_inner_blk">
							<div class="cards_left_blk">
								<div class="cards_inner_blk">
									<div class="cards_img_blk">
										<img src="http://natanitraders.com/admin/upload/1500060152cys_mortice_handle_set.jpg" alt="" class="img-responsive" />
									</div>
								</div>
							</div>
							
							<div class="cards_right_blk">
								<div class="cards_inner_blk expand_parent_cont_js">
									<h2 class="card_title">Lorem Ipsum is simply dummy text of Lorem Ipsum is simply dummy text of</h2>
									<div class="card_cont_blk  read_more_expand">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
										
									</div>
									<div class="read_more_blk read_more_js"><span>Read More</span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="thumbnail_card">
					<div class="thumbnail_card_main_blk">
						<div class="col-md-4">
							<div class="card">
								<div class="cards_inner_blk">
									<div class="cards_img_blk">
										<img src="http://natanitraders.com/admin/upload/1500060152cys_mortice_handle_set.jpg" alt="" class="img-responsive" />
									</div>
								</div>
								<div class="cards_inner_blk">
									<h2 class="card_title">Lorem Ipsum is simply dummy text </h2>
									<div class="card_cont_blk">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
										
									</div>
									<div class="read_more_blk"><span>Read More</span></div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="cards_inner_blk">
									<div class="cards_img_blk">
										<img src="http://natanitraders.com/admin/upload/1500060152cys_mortice_handle_set.jpg" alt="" class="img-responsive" />
									</div>
								</div>
								<div class="cards_inner_blk">
									<h2 class="card_title">Lorem Ipsum is simply dummy text </h2>
									<div class="card_cont_blk">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
										
									</div>
									<div class="read_more_blk"><span>Read More</span></div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="cards_inner_blk">
									<div class="cards_img_blk">
										<img src="http://natanitraders.com/admin/upload/1500060152cys_mortice_handle_set.jpg" alt="" class="img-responsive" />
									</div>
								</div>
								<div class="cards_inner_blk">
									<h2 class="card_title">Lorem Ipsum is simply dummy text </h2>
									<div class="card_cont_blk">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
										
									</div>
									<div class="read_more_blk"><span>Read More</span></div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="cards_inner_blk">
									<div class="cards_img_blk">
										<img src="http://natanitraders.com/admin/upload/1500060152cys_mortice_handle_set.jpg" alt="" class="img-responsive" />
									</div>
								</div>
								<div class="cards_inner_blk">
									<h2 class="card_title">Lorem Ipsum is simply dummy text </h2>
									<div class="card_cont_blk">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
										
									</div>
									<div class="read_more_blk"><span>Read More</span></div>
								</div>
							</div>
						</div>
					</div>
				
				</div>
				
				
				
				
				
			</div>
		<!--/*<!--body details*/-->
		</article>

	</body>
</html>


