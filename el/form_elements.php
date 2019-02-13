<!doctype html>
<html lang="en">
   <head>
      <title>form Element</title>
      <link rel="stylesheet" type="text/css" href="../css/boot_custom.css">
      <link rel="stylesheet" type="text/css" href="../css/global.css">
      <style type="text/css">
			.option_RadioCheck {
				position: relative;
				height: 26px;
				margin-bottom: 10px;
			}
			
			.option_RadioCheck input[type=checkbox], .option_RadioCheck input[type=radio] {
				display: none;
			}
			
			.option_RadioCheck label {
				position:relative;
				height:25px;
				padding-left: 35px;
				min-width: 25px;
				cursor: pointer;
			}
			.option_RadioCheck label:before {
				position: absolute;
				content: '';
				width: 25px;
				height: 25px;
				display: block;
				top: 0;
				left: 0;
				border-radius: 4px;
				background-color: #fff;
				border-width: 1px;
				border-style: solid;
				border-color: #ccc;
				z-index: 1;
			}
			
			.option_RadioCheck label:after {
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
				filter: alpha(opacity=0);
				opacity: 0;
				content: '';
				position: absolute;
				width: 14px;
				height: 7px;
				background: transparent;
				top: 7px;
				left: 5px;
				border: 2px solid #333;
				border-top: none;
				border-right: none;
				-webkit-transform: rotate(-45deg);
				-moz-transform: rotate(-45deg);
				-o-transform: rotate(-45deg);
				-ms-transform: rotate(-45deg);
				transform: rotate(-45deg);
			}
			
			.option_RadioCheck label:hover::after {
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=30)";
				filter: alpha(opacity=30);
				opacity: 0.5;
			}
			
			.option_RadioCheck input[type=checkbox]:checked + label:after, .option_RadioCheck input[type=radio]:checked + label:after {
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
				filter: alpha(opacity=100);
				opacity: 1;
				z-index:2;
			}

			fieldset{border:1px solid #ccc; padding:10px;}
      </style>
      <script type="text/javascript" src="../js/jquery.min.js"></script>
      <script type="text/javascript">
         $("document").ready(function(){
         
			
         });
		 
      </script>
   </head>
   <body>
      <!--/*<header>*/-->
      <!--/*</header>*/-->
      <article class="section_container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
         <!--/*<!--body details*/-->
         <div class="container">
			<div class="form_elements">
				<h2 class="text-center">All form elements</h2>
				<div class="row">
					<div class="col-md-6">
								
						<br />
						text box
						<input type="text" class="form_control">
						<br />
						
						textarea
						<textarea></textarea>
						<br />
						
						password
						<input type="password" placeholder="password" class="form_control">
						<br />
						
						radio
						<div class="row">
							<div class="col-md-6">
								<div class="option_RadioCheck"><input type="radio" class="select_lower_check" value="None" id="low_3" name="check"><label for="low_3">radio</label></div>
							</div>
							<div class="col-md-6">
								<div class="option_RadioCheck"><input type="radio" class="select_lower_check" value="None" id="low_4" name="check" checked><label for="low_4">radio selected</label></div>
							</div>
						</div>						
						<br />
						
						checkbox
						<div class="row">
							<div class="col-md-6">
								<div class="option_RadioCheck"><input type="checkbox" class="select_lower_check" value="None" id="low_1" name="check"><label for="low_1">checkbox</label></div>
							</div>
							<div class="col-md-6">
								<div class="option_RadioCheck"><input type="checkbox" class="select_lower_check" value="None" id="low_2" name="check" checked><label for="low_2">checkbox selected</label></div>
							</div>
						</div>						
						<br />
						
						select box
						<select class="form_control">
							<option>select option</option>
							<option>Option 1</option>
						</select>
						<br />
						
						search box
						<input type="search" class="form_control">
						<br />
						
						<fieldset>
							<legend>Legend</legend>
							<label for=field>Label</label>
							<input type="text" id=field class="form_control">
						</fieldset>
						<br />
					</div>
					<div class="col-md-6">
								
						email
						<input type="email" class="form_control">
						<br />
						
						telephone
						<input type="tel" class="form_control">
						<br />
						
						url
						<input type="url" class="form_control">
						<br />
						
						date
						<input type="date" class="form_control">
						<br />

						Month
						<input type="month" class="form_control">
						<br />

						week
						<input type="week" class="form_control">
						<br />

						datetime-local
						<input type="datetime-local" class="form_control">
						<br />

						number
						<input type="number" class="form_control">
						<br />
						
						number max & min
						<input type="number" class="form_control" min=0 max=15 step=3>
						<br />
										
						<progress max="100" value="10"></progress>
						<br />
						
						<meter value="74" min="0" max="100" low="25" high="75" optimum="15"></meter>
						<br />
					</div>
				</div>

				
				
			</div>
         </div>
         <!--/*<!--body details*/-->
      </article>
   </body>
</html>