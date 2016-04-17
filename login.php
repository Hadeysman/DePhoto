<?php
	require_once('load.php');
	if(isset($_GET['action'])){
	if ( $_GET['action'] == 'logout' ) {
		$loggedout = $j->logout();
	}
	}
	$logged = $j->login('index.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<link rel="stylesheet" href="css/divs.css">
	<link rel="stylesheet" href="css/buttons.css">
	
	
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
                    <a href="index.php">Home</a>
                    <a href="about_us.html">About Us</a>
                    <a href="contact.html">Contact Us</a>
                    
            </nav>
                </header>
               </div> 
        	<div id="content">
        		<div id="container">
        	<div class="reglog">
        		<div style="padding: 20px; margin: 10px auto;">
			<?php if ( $logged == 'invalid' ) : ?>
				<p style="background: #e49a9a; border: 1px solid #c05555; padding: 7px 10px;">
					The username password combination you entered is incorrect. Please try again.
				</p>
			<?php endif; ?>
			<?php if(isset($_GET['reg'])) 
			if($_GET['reg'] == 'true')
			: ?>
				<p style="background: #fef1b5; border: 1px solid #eedc82; padding: 7px 10px;">
					Your registration was successful, please login below.
				</p>
			<?php endif; ?>
			
			<?php if(isset($_GET['action']))
			if($_GET['action'] == 'logout') 
			: ?>
				<?php if ( $loggedout == true ) : ?>
					<p style="background: #fef1b5; border: 1px solid #eedc82; padding: 7px 10px;">
						You have been successfully logged out.
					</p>
				<?php else: ?>
					<p style="background: #e49a9a; border: 1px solid #c05555; padding: 7px 10px;">
						There was a problem logging you out.
					</p>
				<?php endif; ?>
			<?php endif; ?>
			<?php if(isset($_GET['msg']))
			if ( $_GET['msg'] == 'login' ) 
			: ?>
				<p style="background: #e49a9a; border: 1px solid #c05555; padding: 7px 10px;">
						You must log in to view this content. Please log in below.
					</p>
			<?php endif; ?>
		
			<h3>Login</h3>
			
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<table>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="username" /></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Register" /></td>
					</tr>
				</table>
			</form>
			<p>Not a member? <a href="register.php">Register here</a></p>
        	</div>

        	</div>
        	<footer> <p>Posted by: Michael Bertoncini</p>
  			<p>Contact information: <a href="mailto:mbertoncini@student.framingham.edu">mbertoncini@student.framingham.edu</a>.</p>
        	</footer>
        	</div>	
        	
        
    </body>
</html>