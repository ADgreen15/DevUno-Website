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

  $loginclick = "document.getElementById('id01').style.display='none'";

}

?>

<head>
		<meta charset="utf-8">
		<title>DevUno - Account</title>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="login.css" type="text/css">
		<link rel="stylesheet" href="home.css" type="text/css">
		<script src="themeswitcheraccount.js"type="text/javascript"></script>
		<script src="collapseHeader.js" type="text/javascript"></script>
		<script src="scripts/gen_validator4.js" type="text/javascript"></script>

				<!-- Font from Google Fonts, Raleway -->
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>



 <?php

// Set up variables for connection.

$servername = "50.62.209.3:3306";
$username = "DevunoUsers";
$password = "Toxf30*1";
$dbname = "Devuno";
$itemtable = "account_info";

// Create connection

$db = mysqli_connect($servername,$username,$password,$dbname)
 or die('Error connecting to MySQL server.');

$query = "SELECT user_name, due, url, cust_name FROM account_info WHERE user_name = '$user_name'";
mysqli_query($db, $query) or die('No data to display.');

$result = mysqli_query($db, $query);

while ($row = mysqli_fetch_array($result)) {
//echo $row['user_name'] . ' ' . $row['due'] . ': ' . $row['url'] . ' ' . $row['cust_name'] . '<br />';

$uname = $row['user_name'];
$dueamount = $row['due'];
$weburl = $row['url'];
$custname = $row['cust_name'];

}

//$query = "SELECT balance FROM user_auth WHERE user_name='$user_name'";
//$result = mysqli_query($db, $query);
//$balance = mysqli_fetch_row($result)[0];

mysqli_close($db);

 ?>


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

 		<h1 id="welcomeMessage">Welcome to Your Account Page <?php echo $custname ?></h1>
 		<h2 id="welcomeMessageh2">Website Status -  Current Balance  -  Design Downloads</h2>
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
