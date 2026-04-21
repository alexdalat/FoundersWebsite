<?php
if($_POST) {
    $username = $_POST['Username'];
    $age = $_POST['age'];
    $timezone = $_POST['Timezone'];
    $jointime = $_POST['jointime'];
    $playtime = $_POST['playtime'];
    $averagept = $_POST['averagept'];
    $banamount = $_POST['banamount'];
    $contribute = $_POST['contribute'];
    $reason = $_POST['reason'];
    $become = $_POST['become'];
    $comments = $_POST['comments'];
    $handle = fopen("application.php","a");
    fwrite($handle,"<br/><b>What is your in-game username?</b> " . $username .
                   "<br/><b>What is your age? </b>" . $age . 
                   "<br/><b>What timezone are you in? </b>" . $timezone .
                   "<br/><b>How long has it been since you first joined the server? </b>" . $jointime . 
                   "<br/><b>How many hours have you spent actively playing on the server? </b>" . $playtime . 
                   "<br/><b>How frequently do you play on an average week? </b>" . $averagept . 
                   "<br/><b>How many times have you been banned from other servers? Please include the reason. </b>" . $banamount . 
                   "<br/><b>How have you contributed to the server? </b>" . $contribute . 
                   "<br/><b>Why do you want to become moderator? </b>" . $reason . 
                   "<br/><b>If you become moderator, how will you improve the experience of other players? </b>" . $become . 
                   "<br/><b>Additional Comments: </b>" . $comments . 
                   "<br/>");
                   
    fclose($handle);
    
}
?>
    <!DOCTYPE html>
<html lang="en">
    
    <head>
          
        <title>FoundersMC</title>

	<link rel="icon" href="img/favpng.png" type="image/png">	
    
    
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
    
    <link rel="stylesheet" href=stylesMA.css>
    
    </head>
    
    <body style="background: #eaeaea"y>
        
        <img class="title" src="/img/Founders.png">
        
        <img class="logo1" src="/img/favpng.png">
        
        <img class="topstrip" src="/img/DwarfStrip.png">
        
        <div class="topnav">
        <a href="/index.php">HOME</a>
        <a href="/Towny">TOWNY</a>
        <a href=http://founders.buycraft.net>STORE</a>
        <a href="/Help">HELP</a>
        <a href="/Login">LOGIN/SIGN UP</a>
        </div>
            
        <div class=centerbox>
            
      <form action = "" method = "POST" style="text-align: left;margin-top: 100px; margin-left: 50px; margin-right: 10px; font-size: 20px;">
            What is your in-game username? <br/><textarea class= UserName name = "Username"></textarea><br/>
            What is your age? <br/><input type = "text" name = "age" class= "age"><br/>
            What timezone are you in?<br/> <input type = "text" name = "Timezone" class="timezone"><br/>
            How long has it been since you first joined the server?<br/> <input type = "text" name = "jointime" class= "jointime"><br/>
            How many hours have you spent actively playing on the server?<br/> <input type = "text" name = "playtime" class= "playtime"><br/>
            How frequently do you play on an average week?<br/> <input type = "text" name = "averagept" class= "averagept"><br/>
            How many times have you been banned from other servers? Please include the reason.<br/> <input type = "text" name = "banamount" class= "banamount"><br/>
            How have you contributed to the server? (Helped other players, invited friends, etc.)<br/> <input type = "text" name = "contribute" class= "contribute"><br/>
            Why do you want to be moderator?<br/> <input type = "text" name = "reason" class= "reason"><br/>
            If you become moderator, how will you improve the experience of other players?<br/> <input type = "text" name = "become" class= "become"><br/>
            Additional Comments:<br/> <textarea rows = "5" cols = "30" name = "comments" class= "acomments"></textarea><br/>
        <input type = "submit" value = "Post" class="submit"><br/>
        </form>  
        </div>
    </body>
</html>