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
      <script type="text/javascript" src="../js/validate.js"></script>
      
   </head>
   <body>
      <!--/*<header>*/-->
      <!--/*</header>*/-->
      <article class="section_container">
         <!--/*<!--body details*/-->
         <div class="container">
			<div class="form_elements">
				<form action="" class="validationForm">
					<div class="form-group">
					text box
					<input type="text" class="form_control validate_js" data-validation-types = " validateCompulsory validateName ">
					</div>
					
					<div class="form-group">
					Date
					<input type="text" id="date1" class="form_control validate_js" data-validation-types = " validateCompulsory validateDate ">
					</div>
					
						
					<div class="form-group">
					email
					<input type="email" class="form_control validate_js" data-validation-types = " validateCompulsory validateEmail ">
					
					</div>
					
					<div class="form-group">
					textarea
					<textarea  class="validate_js" data-validation-types = " validateCompulsory"></textarea>
					</div>
					
					
					<div class="form-group">
					password
					<input type="password" placeholder="password" class="form_control validate_js" data-validation-types = "validateCompulsory validatePassword">
					</div>
					
					
					<div class="form-group">
					confirm password
					<input type="password" placeholder="password" class="form_control validate_js" data-validation-types = " validateCompulsory validatePassword validateConfirmPassword">
					</div>
					
								
					<div class="form-group">
					checkbox
					<div class="option_RadioCheck"><input type="checkbox" class="select_lower_check" value="None" id="low_1" name="check"><label for="low_1">checkbox</label></div>
					
					<div class="option_RadioCheck"><input type="checkbox" class="select_lower_check" value="None" id="low_2" name="check" checked><label for="low_2">checkbox selected</label></div>
					</div>
					
					
					<div class="form-group">
					select box
					<select class="form_control validate_js" data-validation-types = " validateCompulsory">
						<option>select option</option>
						<option>Option 1</option>
					</select>
					
					</div>
					
					<div class="form-group">
					search box
					<input type="search" class="form_control validate_js" data-validation-types = " validateCompulsory">
					</div>
								
					<div class="form-group">
					telephone
					<input type="tel" class="form_control validate_js" data-validation-types = " validateCompulsory validateNumber validateTeleNumber ">
					</div>
					
					
					<div class="form-group">
					url
					<input type="url" class="form_control validate_js" data-validation-types = " validateCompulsory validateURL">
					</div>
					
					
					<div class="form-group">
					number
					<input type="number" class="form_control validate_js" data-validation-types = " validateCompulsory validateNumber">
					</div>
					
					
					<div class="form-group">
					<button class="validation_js">SUBMIT</button>
					</div>
				
				</form>
			</div>
         </div>
         <!--/*<!--body details*/-->
      </article>
	  <script type="text/javascript">

         $(function(){
			VALIDATIONS.init();
         });
		 
      </script>
   </body>
</html>