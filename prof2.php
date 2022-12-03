<html>
  <head>
    <title>
      Interface Enseignant
    </title>
    
    <link rel="stylesheet" href="css/beginnings.css" />
  </head>
  <body>
    <header class="main">
      <nav>
        <div class="pic">
          <img src="image/logo_ests_2018.png" />
        </div>
        <div class="nav-links">
          <ul>
            <li><a href="maybe.php">Home</a></li>
            <li><a href="rattprog.php">CATCHING UP SCHEDULE</a></li>
			<li><a href="logouten.php" title="Deconnexion">Deconnexion</a></li>
            <li><a href="receivemessage.php">Boite de Message</a></li>
          </ul>
        </div>
      </nav>
      <div class="te3mar"><h1>CATCHING UP SCHEDULE</h1></div>
      <div class="dakhl">
        <form id="walooo" action="" method="post">
          <div id="name">
            <h2 class="name">Name</h2>
            <input class="smia" type="text" name="Enseignant" required /><br />
          </div>
          <h2 class="name">Date</h2>
          <input class="sa3a" type="datetime-local" name="Date_abs" required />
          <h2 class="name">Path</h2>
          <select name="Filliere" required >
            <option></option>
            <option>GL</option>
            <option>ARI</option>
          </select>
          <h2 class="name">Season</h2>
          <input class="lach" type="text" name="Semistre" required />
          <h2 class="name">Subject</h2>
          <input class="lach" type="text" name="Matiere" required />
          <button class="sift" type="submit" name="Send">Send</button>
        </form>
      </div>
    </header>
    <footer id="te7t">
      <h2>CONTACT Us</h2>
      <img src="image/watlogo.jpg" id="wat" />
      <p id="num">+212 590523189</p>
      <img src="image/instlogo.png" id="inst" />
      <p id="gram">@ests</p>
      <img src="image/fblogo.png" id="fb" />
      <p id="boook">/facebook/ests</p>
      <h3>Copyright &copy; 2020 <span> UM5 EST</span></h3>
      <h4>ALL RIGHTS RESERVED</h4>
    </footer>
	<?php
		session_start();
		include("includ/connection.php");
		if(isset($_POST['Send']))
  		{
			$name=htmlentities(mysqli_real_escape_string($con,$_POST['Enseignant']));
			$date=htmlentities(mysqli_real_escape_string($con,$_POST['Date_abs']));
			$filliere=htmlentities(mysqli_real_escape_string($con,$_POST['Filliere']));
			$Semistre=htmlentities(mysqli_real_escape_string($con,$_POST['Semistre']));
			$Matiere=htmlentities(mysqli_real_escape_string($con,$_POST['Matiere']));
			$insert="INSERT INTO absence (Enseignant, Date_abs, Filliere, Semistre, Matiere) values('$name','$date','$filliere','$Semistre','$Matiere')";
			$query=mysqli_query($con,$insert);
		}
	?>
  </body>
</html>
