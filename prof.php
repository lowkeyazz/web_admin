<html>
  <head>
    <title>
      Ensignant page
    </title>
    
    <link rel="stylesheet" href="css/beginnings.css" />
  </head>
  <body>
    <header class="mainprof">
      <nav>
        <div class="pic">
          <img src="image/logo_ests_2018.png" />
        </div>
        <div class="nav-links">
          <ul>
            <li><a href="maybe.php">Home</a></li>
            <li><a href="student.php">Student</a></li>
            <li><a href="prof.php">Professor</a></li>
            <li><a href="dep.php">Department</a></li>
          </ul>
        </div>
      </nav>
      <div class="D2">
        <img class="I1" src="image/iconpro.png" />
        <form action="" method="post">
          <input class="Nom" type="text" placeholder="Username" name="username" required />
          <input class="Password" type="password" name="password" placeholder="Password" required />
          <button class="Login" name="sign_in" type="submit" >Login</button>
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
		if(isset($_POST["sign_in"]))
		{
			$username=htmlentities(mysqli_real_escape_string($con,$_POST['username']));
			$password=htmlentities(mysqli_real_escape_string($con,$_POST['password']));
		
			$select_user="SELECT * FROM enseignant WHERE username='$username' AND password='$password'";
			$query=mysqli_query($con,$select_user);
			$check_user=mysqli_num_rows($query);
			if($check_user==1)
			{
				$_SESSION['username']=$username;
				$user=$_SESSION['username'];
				$get_user="select * from enseignant where username='$user'";
				$run_user=mysqli_query($con, $get_user);
				$row=mysqli_fetch_array($run_user);
				$nom=$row['Nom'];
				echo"<script>window.open('prof2.php?username=$nom','_self') </script>";
			
			}
			else
			{
				echo"<div class='alert alert-danger'>
						<strong>check your email and password</strong>
					</div>";
			}
	
		}
	?>
  </body>
</html>
