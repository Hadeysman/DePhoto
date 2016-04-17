<?php
	require_once('load.php');
	$logged = $j->checkLogin();
	
	if ( $logged == false ) {
		
		//Redirect to the home page
		header("Location: index.php");
		exit;
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<link rel="stylesheet" href="css/divs.css">
	<link rel="stylesheet" href="css/buttons.css">
	
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>About Us</title>
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
                    <a href="index.php">Home</a>
                    <a href="contact.php">Contact Us</a>
                    
                    
                    
            </nav>
                </header>
               </div> 
        	<div id="content">
        		<h1>About Us</h1>
        		<p>Hello my name is___________________________and this site is dedicated to making your old, loved photos feel refreshed.</p>

        	</div>
        	<footer> <p>Posted by: Michael Bertoncini</p>
  			<p>Contact information: <a href="mailto:mbertoncini@student.framingham.edu">mbertoncini@student.framingham.edu</a>.</p>
        	</footer>
        	</div>	
        	
        
    </body>
</html>
<?php ?>
