

var errorMsgs = {
	"validatePassword" 			: "Please enter a secure password",
	"validateName" 				: "Please enter valid name",
	"validateTeleNumber"		: "Please enter valid 10 digit mobile number",
	"validateNumber"			: "Please enter only numbers",
	"validateEmail"				: "Please enter valid email",
	"validateURL"				: "Please enter valid URL",
	"validateDate"				: "Please enter valid Date (DD/MM/YYYY)",
	"validateCompulsory"		: "Please enter some value",
	"validateConfirmPassword"	: "Passwords do not match"
	
}

var VALIDATIONS = {
	
	errorMsgStart : "<p class='form_error_msg'>",
	errorMsgEnd : "</p>",
	
	init : function(){
		VALIDATIONS.events();
	},
	
	events : function (){
		
		$(".validate_js").blur(function(){
			
			$(this).parent().find(".form_error_msg").remove();
			
			//trim will remove trailing and ending spaces. replace function will replace multiple spaces with single space. Used to make data attribute value more robust.
			var validationTypes = $(this).attr("data-validation-types").trim().replace(/\s\s+/g, ' ').split(" ");
			
			for (var i = 0; i < validationTypes.length; i++)
			{
				//alert(validationTypes[i])
				var funcName = validationTypes[i];
				
				if(!VALIDATIONS[funcName]($(this).val()))
				{
					$(this).parent().append(VALIDATIONS.errorMsgStart + errorMsgs[funcName] + VALIDATIONS.errorMsgEnd);
					return false;
				}
				else{
					$(this).parent().find(".form_error_msg").remove();
				}
				
			}
		});
		
	},
	
	validateCompulsory: function(input) {
		inputValue = /([^\s])/;
		return inputValue.test(input);
	},
	validateEmail: function(input) {
		var email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return email.test(input);
	},
	validateTeleNumber: function(input) {
		var phoneno = /^\d{10}$/;
		return phoneno.test(input);
	},
	validateName: function(input) {
		var name = /^[a-zA-Z .]{2,30}$/;
		return name.test(input);
	},
	validatePassword: function(input) {
		var password = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
		return password.test(input);
	},
	validateURL: function(input) {
		var url = /https?:\/\/(www\.)?[-a-zA-Z0-9@:%.\+~#=]{2,256}\.[a-z]{2,11}\b([-a-zA-Z0-9@:%\+.~#?&//=]*)/;
		return url.test(input);
	},
	validateDate: function(input) {
		//accepts date in DD/MM/YYYY format and accepts year starting only from 19 and 20
		var dateDDMMYYYY = /^(0?[1-9]|[12][0-9]|3[01])[\/](0?[1-9]|1[012])[\/](?:19|20)[0-9]{2}$/;
		return dateDDMMYYYY.test(input);
	},
	validateConfirmPassword: function(input) {
		//This matches the confirm password with the field which has data-validation-types = 'validateCompulsory validatePassword' exactly (no extra spaces) and there must be only one such element on the page.
		return (input == $(".validate_js[ data-validation-types = 'validateCompulsory validatePassword' ]").val());
	},
	validateNumber: function(input) {
		var num = /^ *[0-9]+ *$/;
		return num.test(input);
	}
}