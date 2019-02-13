<!doctype html>
<html lang="en">
	<head>
		<title>Tab Element</title>
		
		<link rel="stylesheet" type="text/css" href="../css/boot_custom.css">
		<link rel="stylesheet" type="text/css" href="../css/global.css">
		<style type="text/css">
		
		.overlay {
			display:none;
			position: fixed;
			z-index: 8;
			background: rgba(51, 51, 51, 0.78);
			top: 0;
			right: 0;
			left: 0;
			bottom: 0;
			-webkit-transition: all 0.8s;
			-moz-transition: all 0.8s;
				-o-transition: all 0.8s;
				-ms-transition: all 0.8s;
					transition: all 0.8s;
		}
		.comm_pop_container_blk {
			display:none;
			height:auto;
			background: #fff;
			position: fixed;
			z-index: 9;
			top: 50%;
			left: 50%;
			-ms-transform: translate(-50%, -50%);
			-moz-transform: translate(-50%, -50%);
			-webkit-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			width:430px;
			padding:0px;
			border-radius:5px;
			}
		.comm_pop_container_blk .panel{margin-bottom:0; border-width:0;}
		
		.close_btn {
			position: absolute;
			width: 20px;
			height: 20px;
			display: block;
			right: 10px;
			top: 10px;
			z-index:2;
		}
		.close_btn:before, .close_btn:after{
			content:'';
			position:absolute;
			height: 2px;
			width: 20px;
			background:#33322A;
		}
		.close_btn:before{transform: rotate(45deg);top: 9px;left: 0;}
		.close_btn:after{transform: rotate(-45deg);top: 9px;right: 0px;}
		.open_model { padding: 10px 20px; border-radius: 5px; display: inline-block; margin-top: 10px; background: #000; color: #fff; cursor: pointer;}
		.signin_main_link { cursor: pointer;}
		.yesOrNo_btn{display:inline-block;}
		</style>
		<script type="text/javascript" src="../js/jquery.min.js"></script>
 <script type="text/javascript">
	$("document").ready(function(){
		$(".open_model_js").on("click", function(){
			$(".comm_popup_overlay_Js, .comm_pop_container_blk").fadeIn();
		});
		$(".close_btn_js").on("click", function(e){
			e.preventDefault();
			$(".comm_popup_overlay_Js, .comm_pop_container_blk").fadeOut();
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
				<div class="open_model open_model_js"> open model</div>
				<!-- popup style -->
					<div class="overlay comm_popup_overlay_Js"></div>
					<div class="comm_pop_container_blk">
					<a href="" class="close_btn close_btn_js"></a>
						<div class="panel panel-default">
							<div class="panel-heading">Panel heading without title</div>
							<div class="panel-body">
								<p>confirmation message</p>
								<div class="yesOrNo_blk">
									<span href="" class="yesOrNo_btn btn btn_solid small_btn yes_btn">Yes</span>
									<span href="" class="yesOrNo_btn btn  small_btn btn_border no_btn">No</span>
								</div>
							</div>
						</div>
					
					</div>
				<!-- popup style end -->
				
				</div>
		<!--/*<!--body details*/-->
		</article>

	</body>
</html>


