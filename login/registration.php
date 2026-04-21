<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
    

    

    

    
    
    
    
          
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){ //<<



 
  $con = mysqli_connect('localhost', 'root', 'j%dqq!Y;-N#A29KG', 'register');

    
    
    $username = $_POST['username'];
    $sql_u = "SELECT * FROM users WHERE username='$username'";
    $res_u = mysqli_query($con, $sql_u);
    if (mysqli_num_rows($res_u) > 0) { //<<
  	  echo "<h3>Sorry... Username already taken.</h3>
<br/><a href='registration.php'>Please enter a valid username</a></div>";
    } else { 
    

        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        // username, password, email, date, image
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }
    }


     else {
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post" enctype="multipart/form-data">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
    <p>Already have an account? <a href='login.php'>Login</a></p>
    
<?php }  ?> 
</body>
</html> 