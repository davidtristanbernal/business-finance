<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "dbfirst";
$remarks= "";


//Create Connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

//Check Connection
if (!$conn){
	die("Connection Failed: " .mysqli_connect_error());
}
//echo"Connected Succesfully";
if(!(empty($_POST["uname"]) && empty($_POST["pin"]))){
	
	$UN=$_POST["uname"];
	$PW=$_POST["pin"];

	$sql = "SELECT * FROM users WHERE Username='".$UN."' AND Password='".$PW. "';";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	header( "Location: profile.php" );
	}
$remarks ="Sorry. Unrecognized username or password.Please try again";
}

?>

<!DOCTYPE html >
<html >
   <head>
      <title>LogIN Page</title>
      <link rel="stylesheet" href="style15.css">  
   </head>

   <body>
        <div id="head">
             <h2> Welcome to Labyrinth's Theatre</h2>
            
        </div>

        <div id="sec">
              <div id="navi">
                   
             </div>
  
            <div id="content">

                    <fieldset>
                    <legend>Log IN Details :</legend><br>
                     <form action="main.php" method="post">
					 <label for="uname">Username:</label><br><br>
					 <input type="text" id="uname" name="uname" ><br><br>
					 <label for="pin">PIN Code:</label><br><br>
					 <input type="password" id="pin" name="pin" <br><br><br>
					 <input type="submit" value="Register">  </fieldset>
					</select> 
              </form>
            </div>
       </div>

       <div id="footer">
              <p>Labyrinth's Theatre</p>
       </div>

    </body>

</html>
