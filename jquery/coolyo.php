<!DOCTYPE html>
 <html>
 <head>
	<script type="text/javascript" src="jquery-1.2.1.js"></script>
	<script src="jquery.js" type="text/javascript"></script>
	<script src="jquery.validate.js" type="text/javascript"></script>
	<script  type="text/javascript">
	checkRegAcc = function (){
		if ($('#account').val().length >=2) {
			$.ajax({
		url: 'validate.php',
		type: 'GET',
		data: {
			user_name: $('#account').val()
		},
		error: function(xhr) {
			//alert($("#account").val());
			alert('Ajax request 發生錯誤');
		},
		success: function(response) {
			$('#msg_user_name').html(response);
			$('#msg_user_name').fadeIn();
		}
	} );
		}else{
			$('#msg_user_name').html('');
		}
	};
	</script>
	
	<script type="text/javascript">
$.validator.setDefaults({
	submitHandler: function() { alert("submitted!"); }
});

$().ready(function() {
	// validate the comment form when it is submitted
	$("#commentForm").validate();
	
	// validate signup form on keyup and submit
	$("#signupForm").validate({
		rules: {
			account: "required",
			lastname: "required",
			username: {
				required: true,
				minlength: 2
			},
			password: {
				required: true,
				minlength: 5
			},
			confirm_password: {
				required: true,
				minlength: 5,
				equalTo: "#password"
			},
			email: {
				required: true,
				email: true
			},
			topic: {
				required: "#newsletter:checked",
				minlength: 2
			},
			agree: "required"
		},
		messages: {
			account: "請輸入帳號",
			lastname: "Please enter your lastname",
			username: {
				required: "Please enter a username",
				minlength: "Your username must consist of at least 2 characters"
			},
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			},
			confirm_password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long",
				equalTo: "Please enter the same password as above"
			},
			email: "Please enter a valid email address",
			agree: "Please accept our policy"
		}
	});
	
	// propose username by combining first- and lastname
	$("#username").focus(function() {
		var firstname = $("#firstname").val();
		var lastname = $("#lastname").val();
		if(firstname && lastname && !this.value) {
			this.value = firstname + "." + lastname;
		}
	});
	
	//code to hide topic selection, disable for demo
	var newsletter = $("#newsletter");
	// newsletter topics are optional, hide at first
	var inital = newsletter.is(":checked");
	var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
	var topicInputs = topics.find("input").attr("disabled", !inital);
	// show when newsletter is checked
	newsletter.click(function() {
		topics[this.checked ? "removeClass" : "addClass"]("gray");
		topicInputs.attr("disabled", !this.checked);
	});
});
</script>

<style type="text/css">
#commentForm { width: 500px; }
#commentForm label { width: 250px; }
#commentForm label.error, #commentForm input.submit { margin-left: 253px; }
#signupForm { width: 670px; }
#signupForm label.error {
	margin-left: 10px;
	width: auto;
	display: inline;
}
#newsletter_topics label.error {
	display: none;
	margin-left: 103px;
}
form.cmxform label.error, label.error {
	/* remove the next line when you have trouble in IE6 with labels in list */
	color: red;
	font-style: italic
}

</style>


  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>jQuery demo</title>
 </head>
 <body>
<!--
	<input name="account" id="account" type="text"  maxlength="18" onkeyup="checkRegAcc()" />
	<span id="msg_user_name"></span>
-->
	<form class="cmxform" id="signupForm" method="get" action="">
	<fieldset>
		<legend>Validating a complete form</legend>

		<p>
			<label for="firstname">Firstname</label>
			<input id="account" name="account" onkeyup="checkRegAcc()" />
			<span id="msg_user_name"></span>
		</p>
		<p>
			<label for="lastname">Lastname</label>
			<input id="lastname" name="lastname" />
		</p>

		<p>
			<label for="username">Username</label>
			<input id="username" name="username" />
		</p>
		<p>
			<label for="password">Password</label>
			<input id="password" name="password" type="password" />
		</p>

		<p>
			<label for="confirm_password">Confirm password</label>
			<input id="confirm_password" name="confirm_password" type="password" />
		</p>
		<p>
			<label for="email">Email</label>
			<input id="email" name="email" />
		</p>

		<p>
			<label for="agree">Please agree to our policy</label>
			<input type="checkbox" class="checkbox" id="agree" name="agree" />
		</p>
		<p>
			<label for="newsletter">I'd like to receive the newsletter</label>
			<input type="checkbox" class="checkbox" id="newsletter" name="newsletter" />
		</p>

		<fieldset id="newsletter_topics">
			<legend>Topics (select at least two) - note: would be hidden when newsletter isn't selected, but is visible here for the demo</legend>
			<label for="topic_marketflash">
				<input type="checkbox" id="topic_marketflash" value="marketflash" name="topic" />
				Marketflash
			</label>
			<label for="topic_fuzz">
				<input type="checkbox" id="topic_fuzz" value="fuzz" name="topic" />
				Latest fuzz
			</label>

			<label for="topic_digester">
				<input type="checkbox" id="topic_digester" value="digester" name="topic" />
				Mailing list digester
			</label>
			<label for="topic" class="error">Please select at least two topics you'd like to receive.</label>
		</fieldset>
		<p>
			<input class="submit" type="submit" value="Submit"/>
		</p>

	</fieldset>
</form>
	
 </body>
 </html>

