<?php
	require_once('load.php');
	$logged = $j->checkLogin();
	
	if ( $logged == false ) {
		
		//Redirect to the home page
		header("Location: index.php");
		exit;
	} else {
		//Grab our authorization cookie array
		$cookie = $_COOKIE['dephotologauth'];
		
		//Set our user and authID variables
		$user = $cookie['user'];
		$authID = $cookie['authID'];
		
		//Query the database for the selected user
		$table = 'j_users';
		$sql = "SELECT * FROM $table WHERE user_login = '" . $user . "'";
		$results = $jdb->select($sql);

		//Kill the script if the submitted username doesn't exit
		if (!$results) {
			die('Sorry, that username does not exist!');
		}

		//Fetch our results into an associative array
		$results = mysql_fetch_assoc( $results );
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<link rel="stylesheet" href="css/divs.css">
	<link rel="stylesheet" href="css/buttons.css">
	<script>
		function changeImage(){
			var image = document.getElementById('myImage');
			image.src = "img/after.gif";
		}
	</script>
	
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>DeCalPhoto</title>
    </head>
    <body style="text-align: center">
        
        <div id="background">
        	<div id="header">
        	 <header>
                <div>
            
                    <h2>DeCaltaldo Editing</h2>
                    </div>
            <nav>
                    <a href="login.php?action=logout">Logout</a>
                    <a href="about_us.php">About Us</a>
                    <a href="contact.html">Contact Us</a>
                    
            </nav>
                </header>
               </div> 
        	<div id="content">
        		<h1>What we do!</h1>
        		<p>We are your solution to editing old photos!  Need a pictured altered?  We got your back. </p>
        		<img id="myImage" onclick="changeImage()" src="img/display.JPG" width="600" height="400">

        	</div>
        	<footer> <p>Posted by: Michael Bertoncini</p>
  			<p>Contact information: <a href="mailto:mbertoncini@student.framingham.edu">mbertoncini@student.framingham.edu</a>.</p>
        	</footer>
        	</div>	
        	
        
    </body>
</html>
<?php } ?>