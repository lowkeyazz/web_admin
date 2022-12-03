<!DOCTYPE>
<html>
	<head>
		<title>
			Send Message
		</title>
    <link rel="stylesheet" href="css/beginnings.css" />
  </head>
  <body>
    <header class="mainstu">
      <nav>
        <div class="pic">
          <img src="image/logo_ests_2018.png" />
        </div>
        <div class="nav-links">
          <ul>
            <li><a href="maybe.php">Home</a></li>
            <li><a href="chef_absence.php">Absent</a></li>
            <li><a href="chef_ratt.php">Rattrapages programmes</a></li>
			<li><a href="logoutdep.php" title="Deconnexion">Deconnexion</a></li>
          </ul>
        </div>
      </nav>
	  <div class="dakhl">
	  <form id="walooo" action="" method="post">
          <div id="name">
            <h2 class="name">Name</h2>
            <input class="smia" type="text" name="chef" required /><br />
          </div>
          <h2 class="name">Teacher</h2>
          <select name="TN" required >
        <?php
					session_start();
					include("includ/connection.php");
					$sql="SELECT Nom FROM enseignant";
					$result=$con->query($sql);
					if($result ->num_rows>0)
					{   
					while($row=$result->fetch_assoc())
						{
							echo "<option>".$row[""]."</option>
							<option>".$row["Nom"]."</option>";
						}
						echo "</select>";
					}
					if(isset($_POST['Send'])){
						$name=htmlentities(mysqli_real_escape_string($con,$_POST['chef']));
						$Enseignant=htmlentities(mysqli_real_escape_string($con,$_POST['TN']));
						$message=htmlentities(mysqli_real_escape_string($con,$_POST['message']));
						$insert="INSERT INTO message (Nom,Ensei,Message) values('$name','$Enseignant','$message')";
						$query=mysqli_query($con,$insert);
					}
					?>
          </select>
          <h2 class="name">Message</h2>
          <input class="lach" type="text" name="message" required />
          <button class="sift" type="submit" name="Send">Send</button>
        </form>
		</div>
	   </header>
    <footer id="down">
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
</html>