<!DOCTYPE html >
<html >
   <head>
      <title>Feedback Page</title>
      <link rel="stylesheet" href="style15.css">  
   </head>

   <body>
        <div id="head">
             <h2>Feedback</h2>
             <form action="fentry.php" method="POST">
        </div>

        <div id="sec">
              <div id="navi">
			  <li><a href="main.php">Main</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="about.php">About</a></li>
					<li><a href="fentry.php">Feedback Entry</a></li>
					<li><a class="active"href="fback.php">Feedback</a></li>

             </div>
  
            <div id="content">

                    <fieldset>
                    <legend>Feedback Details :</legend>
										
					Date :  <?php echo $_POST['date']; ?><br>
					Content :  <?php echo $_POST['w3review']; ?><br>
					
					</fieldset>
                            
                    </select> 
              </form>
            </div>
       </div>

       <div id="footer">
              <p>Labyrinth's Theatre</p>
       </div>

    </body>

</html>