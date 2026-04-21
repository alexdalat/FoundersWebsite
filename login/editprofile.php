<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "j%dqq!Y;-N#A29KG";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

session_start();
$pusername = $_SESSION['username'];
$pid = $_SESSION['id'];

print "Your  old username is: $pusername $pid";




          
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){ 
    
    
    	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
    
    
    
//check if username is taken
    $username = $_POST['username'];
    $sql_u = "SELECT * FROM users WHERE username='$username'";
    $res_u = mysqli_query($con, $sql_u);
    if (mysqli_num_rows($res_u) > 0) { 
  	  echo "<h3>Sorry... Username already taken.</h3>
<br/><a href='editprofile.php'>Please enter a valid username</a></div>";
    } else { 

    }
    
    
    
    



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE users SET username=$username WHERE id=$pid";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
}
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post" enctype="multipart/form-data">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>

    
