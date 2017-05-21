<!DOCTYPE html>
<html id="index1">

<?php

require_once 'PHP/auth.php';
session_start();

$loginurl = "login.php";

$authenticator = new UserAuthenticator;
$user_name = $authenticator->user_auth(0);
if($user_name == true)
{

  $logintxt = "Account";

  $loginclick = "location.href='/Account.php'";

}
else{

  $logintxt = "Login";

  $loginclick = "document.getElementById('id01').style.display='block'";

}

?>

    <head>
        <meta charset="utf-8">
        <title>DevUno - Graphic Design</title>
        <link rel="stylesheet" href="login.css" type="text/css">
        <link rel="stylesheet" href="home.css" type="text/css">
        <script src="themeswitchergraphic.js"type="text/javascript"></script>
        <script src="collapseHeader.js" type="text/javascript"></script>
        <script src="scripts/gen_validator4.js" type="text/javascript"></script>

            <!-- Font from Google Fonts, Raleway -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    </head>


    <?php

    session_start();

    /* Creates and assings a session token */ // (Hopefully)
    $form_token = md5(uniqid('auth_',true));
    $_SESSION['form_token'] = $form_token;

    ?>




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



    <header id="mainHeader">
            <!-- Header Image inside div -->
        <div id="headerImage">
            <div id="imageLinkEncapsulation"><a id="imageLink" href="index.html"></a></div>
            <img id="headerLogoLight"src="Images/dev_noName1.png" alt="">
            <img id="headerLogoDark" src="Images/dev_noName_dark.png" alt="">
        </div>

        <div id="themeSwitchSection">
                <!-- This div has a id:themeButton performing the Javascript function -->
            <div title="Change Theme"src="Images/moonicon.png"onclick="themeSwitch()" id="themeButton" value="on">
                <img id="themeButtonIMG" src="Images/moonicon.png" alt="Theme Switch">
            </div>
            <button id="loginbtn" onclick=<?php echo $loginclick ?> style="width:auto;"><?php echo $logintxt ?></button>
                <!-- This div serves as a display for night mode, doesnt actually do anything. The function is only controlled by the id:themeButton -->
            <img src="Images/moonicon2.png" id="themeButton2"></img>
        </div>

        <hr id="hrBreak">

            <!-- Header Tabs  -->
        <ul id="headerTabs">
            <li><a title="Home Page" id="homeLink" href="index.php">Home</a></li>
            <li><a title="Learn more about Web Dev services"id="webdevLink" href="WebDev.php">Web Development</a></li>
            <li><a title="Learn more about Graphic Design services" id="graphicdesignLink" href="Graphic.php">Graphic Design</a></li>
            <li><a title="Learn about the Devuno team"id="aboutLink" href="teampage.php">About the Team</a></li>
            <li><a  title="Contact Us" id="contactLink" href="contact.php">Contact</a></li>
        </ul>
    </header>

    <body id="image1">
        <img id="gradient1" src="Images/gradient1.png" alt="">
        <img id="gradient2" src="Images/gradient2.png" alt="">

        <h1 id="welcomeMessage">Graphic Design</h1>
        <h2 id="welcomeMessageh2">Web Layout  -  Logos  -  Stock Photos</h2>
    </body>

    <body id="whatWeDo">
        <img id="gradient3light" src="Images/gradient3light.png" alt="">
        <img id="gradient3dark" src="Images/gradient3dark.png" alt="">

        <div id="whatWeDo">What we do here.</div>
        <img id="bracket" src="Images/bracket1.png" alt="">
        <img id="bracketLight" src="Images/bracket1light.png" alt="">
        <ul id="whatWeDoLi">
            <li>Web Development</li>
            <li>Case by Case IT Review</li>
            <li>Graphic Design</li>
        </ul>
    </body>
</html>
