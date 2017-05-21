<html>

<head>
  <meta charset="utf-8">
  <title>Devuno</title>
  <link rel="stylesheet" href="login.css" type="text/css">
  <link href='//fonts.googleapis.com/css?family=Play' rel='stylesheet'>
  <link href='//fonts.googleapis.com/css?family=Permanent Marker' rel='stylesheet'>
  <script src="scripts/gen_validator4.js" type="text/javascript"></script>
</head>


<?php

session_start();

/* Creates and assings a session token */ // (Hopefully)
$form_token = md5(uniqid('auth_',true));
$_SESSION['form_token'] = $form_token;

?>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>


	<div id="id01" class="modal">

		<body>
			<form class="modal-content animate" action="login_auth.php" method="post" id="login">

        <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="/images/dev_noName.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">

				<fieldset>
					<p>
						<input type="text" name="user_name" value="" maxlength="20"/>
						<label for="user_name">Username</label>
					</p><p>
						<input type="password" name="user_password" value="" maxlength="40"/>
						<label for="user_password">Password</label>
					</p>
					<input type="hidden" name="form_token" value="<?php echo $form_token; ?>"/>
					<p>
						<input type="submit" name="login" value="Login"/>
					</p>
				</fieldset>

      </div>


      <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>


			</form>


      </div>


			<script type="text/javascript">
			var formvalid = new Validator()
			formvalid.EnableOnPageErrorDisplay();
			formvalid.EnableMsgsTogether();

			formvalid.addValidation("user_name","req","You must enter a username");
			formvalid.addValidation("user_password","req","You must enter a password");

			formvalid.addValidation("user_name","maxlen=20",
					"Your username may not be longer than 20 characters");
			formvalid.addValidation("user_password","maxlen=40",
					"Your password may not be longer than 40 charachers");

			formvalid.addValidation("user_name","alnum",
					"Your username may only contain letters and numbers");

          // Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
			</script>
		</body>



</html>
