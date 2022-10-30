<!DOCTYPE html >
<html >
   <head>
      <title>Feedback Entry Page</title>
      <link rel="stylesheet" href="style15.css">  
   </head>

   <body>
        <div id="head">
             <h2>Feedback Entry</h2>
             <form action="fback.php" method="POST">
        </div>

        <div id="sec">
              <div id="navi">
                    <ul>
                    <li><a href="main.php">Main</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="about.php">About</a></li>
					<li><a  class="active" href="fentry.php">Feedback Entry</a></li>
					<li><a href="fback.php">Feedback</a></li>
                    </ul>
             </div>
  
            <div id="content">

                    <fieldset>
                    <legend>Feedback Entry Details :</legend>
<label for="date">Date : </label>
					<input type="date" id="date" name="date"><br>
					<form action="dlist.php">
					<textarea id="w3review" name="w3review" rows="20" cols="100">Please type here.
					</textarea><br>
					<input type="submit" value="Submit"></form>
                    </select> 
				</form>
				
            </div>
       </div>

       <div id="footer">
              <p>Labyrinth's Theatre</p>
       </div>

    </body>

</html>