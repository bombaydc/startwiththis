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
         width:460px;
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
         .log_reg_mid_sec, .social_signin_blk {    float: left;    width: 100%;}
         .social_signin_blk li {    width: 50%;    padding: 0 10px;    float: left;}
         .social_signin_blk {}
         .social_signin_blk li a {    display: inline-block; text-align: center;    width: 100%; }
         .social_signin_blk li a .social_btn {    display: block;    padding-top: 10px;    padding-bottom: 10px;    color: #fff;}
         .social_signin_blk li a .fb { background:#3b5998;}
         .social_signin_blk li a .gPlus { background:#d6492f;}
         .login_or { float: left; width: 100%; position: relative;text-align: center; padding: 10px 0;}
         .login_or span {    line-height: 14px;    display: inline-block;   padding: 3px 10px;    vertical-align: middle;   background: #fff;    position: relative;   text-transform: uppercase;}
         .login_or:before {    content: "";    position: absolute;    width: 100%;    height: 1px;    background: #ddd;    left: 0;    top: 55%;    z-index: 0;}
         .inline_with_btn {    text-align: center;}
         .inline_with_btn li {   padding: 5px 0;}
         .inline_with_btn li button {    width: 100%;}
		 .already_Account { margin-top: 10px;  text-align: center;}
		 .reg_panel_body{}
		 .log_reg_mid_sec{padding:15px;}
		 .poptitle_blk { padding: 10px 15px; background: #337ab7; color: #fff;}
		 .log_reg_mid_sec button { width: 100%;}
		 .log_reg_mid_sec p{font-size:14px; margin-bottom:10px;}
		 .verification_main_blk{text-align:center;}
		
		.forgotpassword_main_link, .signin_main_link, .signup_main_link { cursor:pointer; }
		 
      </style>
      <script type="text/javascript" src="../js/jquery.min.js"></script>
      <script type="text/javascript">
         $("document").ready(function(){
         	$(".open_model_js").on("click", function(){
         		$(".comm_popup_overlay_js, .comm_pop_container_js").fadeIn();
         	});
         	$(".close_btn_js, .comm_popup_overlay_js").on("click", function(e){
				e.preventDefault();
         		$(".comm_popup_overlay_js, .comm_pop_container_js").fadeOut();
         	});
			
			
         	$(".signup_main_link").on("click", function(e){
				e.preventDefault();
         		$(".userLoginRegisterPopup").hide();
         		$(".signup_main_blk").show().find("input:first").focus();
				
         	});
			
         	$(".forgotpassword_main_link").on("click", function(e){
				e.preventDefault();
         		$(".userLoginRegisterPopup").hide();
         		$(".forgotpassword_main_blk").show().find("input:first").focus();
         	});
         	$(".signin_main_link").on("click", function(e){
				e.preventDefault();
         		$(".userLoginRegisterPopup").hide();
         		$(".signin_main_blk").show().find("input:first").focus();
         	});
         	$(".resendforgot_link").on("click", function(e){
				e.preventDefault();
         		$(".userLoginRegisterPopup").hide();
         		$(".verification_main_blk").show();
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
         <div class="open_model open_model_js signup_main_link">signIn</div>
         <!-- popup style -->
         <div class="overlay comm_popup_overlay_js"></div>
         <div class="comm_pop_container_blk comm_pop_container_js">
            <a href="" class="close_btn close_btn_js"></a>
            <div class="panel panel-default">
               <!-- <div class="panel-heading">Sign In</div> -->
               <div class="reg_panel_body">
			   
			   
                  <div class="signin_main_blk userLoginRegisterPopup" >
                     <div class="poptitle_blk">Login</div>
                     <!--    ACCESS DENIED-->
                     <div class="log_reg_mid_sec">
                        <div class="social_signin_blk">
                           <ul class="list-inline">
                              <li>
                                 <a href="">
                                 <span class="social_btn fb">
                                 <i class="fa fa-facebook" aria-hidden="true"></i> 
                                 Login with Facebook
                                 </span>
                                 </a>
                              </li>
                              <li><a href="">
                                 <span class="social_btn gPlus"> <i class="fa fa-google-plus" aria-hidden="true"></i> Login with Google</span></a>
                              </li>
                           </ul>
                        </div>
                        <div class="login_or">
                           <span>or</span>
                        </div>
                        <div class="singup_form_blk">
                           <form action="" class="sign_in_frm">
                              <div class="form-group">
                                 <input type="text" placeholder="Email / Mobile No." class="form_control" id="username">
                              </div>
                              <div class="form-group">
                                 <input type="password" placeholder="Password" class="form_control" id="userpassword">
                              </div>
                              <div class="form-group inline_with_btn">
                                 <ul>
                                    <li class="forgotPassword_Link">
                                       <span class="forgotpassword_main_link" >Forgot password</span>
                                    </li>
                                    <li><button class="btn medium_btn btn_solid" id="btnLogin">Login</button></li>
                                    <li class="register_link">
                                       <span class="signup_main_link">Don't have an account? Register</span>
                                    </li>
                                 </ul>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="signup_main_blk  userLoginRegisterPopup"  style="display:none;">
                     <div class="poptitle_blk">Registration</div>
                     <div class="log_reg_mid_sec">
                        <div class="singup_form_blk">
                           <form action="" class="sign_up_frm">
                              <div class="form-group">
                                 <input type="text" placeholder="Name" class="form_control" id="">
                              </div>
                              <div class="form-group" id=""> 
                                 <input type="email" placeholder="Email Address" class="form_control" id="regisemail">
                              </div>
                              <div class="form-group" id="">
                                 <div class="row">
                                    <div class="col-sm-2 " id="countryCodediv">
                                       <div id="" class="form_control">+91</div>
                                    </div>
                                    <div class="col-sm-10">
                                       <input type="number" pattern="[0-9]" placeholder="Mobile No." class="form_control" id="regismob" maxlength="10" minlength="10" size="10">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <input type="password" placeholder="Create a password" class="form_control" id="">
                              </div>
                              <div class="form-group">
                                 <input type="password" placeholder="Confirm password" class="form_control" id="">
                              </div>
                              <div class="form-group">
                                 <button class=" btn medium_btn btn_solid width100" id="btnRegister">Register</button>
                                 <div class="already_Account">Already have an account? 
                                    <span class="signin_main_link">Login here</span>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="forgotpassword_main_blk  userLoginRegisterPopup" style="display:none;">
                     <div class="poptitle_blk">Forgot Password</div>
                     <div class="log_reg_mid_sec">
                        <p>Please enter your verified Email / Mobile No. to reset your password</p>
                        <div class="singup_form_blk">
                           <form action="" class="reset_frm">
                              <div class="form-group">
                                 <input type="text" placeholder="Email / Mobile No." class="form_control" id="forgotemail">
                              </div>
                              <div class="form-group">
                                 <button class=" btn medium_btn btn_solid width100 resendforgot_link" id="">Submit</button>
                                 <div class="already_Account">Remember your password? <span class="signin_main_link">Login here</span></div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="verification_main_blk userLoginRegisterPopup" style="display:none;">
                     <div class="poptitle_blk">Forgot Password</div>
					 <div class="log_reg_mid_sec">
						<p>Please check your inbox. We have sent a verification link.</p>
						<p><span class="resend_password">Resend Password</span></p>
					 </div>
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