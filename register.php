<?php
	require_once('load.php');
	$j->register('login.php');
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
                </header>
               </div> 
        	<div id="content">
        		<div id="container">
        	<div class="reglog">
        		<h3>Register</h3>
			
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<table>
					<tr>
						<td>Name:</td>
						<td><input type="text" name="name" /></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="username" /></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password" /></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" name="email" /></td>
					</tr>
					<input type="hidden" name="date" value="<?php echo time(); ?>" />
					<tr>
						<td></td>
						<td><input type="submit" value="Register" /></td>
					</tr>
				</table>
			</form>
        	</div>

        	</div>
        	<footer> <p>Posted by: Michael Bertoncini</p>
  			<p>Contact information: <a href="mailto:mbertoncini@student.framingham.edu">mbertoncini@student.framingham.edu</a>.</p>
        	</footer>
        	</div>	
        	
        
    </body>
</html>
