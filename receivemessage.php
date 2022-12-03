<html>
	<head>
		<title>Message</title>
		<link rel="stylesheet" href="css/beginnings.css">
		<style>
			table{
				border: 1;
				width:90%;
				margin-left: 5%;
				margin-top:5%;
				background-color: blue;
				margin-bottom: 10px;
			}
			th{
					background-color:blue;
					color:white;
					height:50px;
				}
			tr:nth-child(even){background-color:#f2f2f2;
				height:40px;
				text-align:center;
			}
		</style>
	</head>
	<body>
	<header class="maindep">
      <nav>
        <div class="pic">
          <img src="image/logo_ests_2018.png" />
        </div>
        <div class="nav-links">
          <ul>
            <li><a href="maybe.php">Home</a></li>
			<li><a href="logouten.php" title="Deconnexion">Deconnexion</a></li>
            <li><a href="rattprog.php">Rattrapage</a></li>
            <li><a href="chef_absence.php">Absent(e)</a></li>
          </ul>
        </div>
      </nav>
	  <table>
			<tr>
				<th>Message</th>
			</tr>
				<?php
					session_start();
					include("includ/connection.php");
					$get_user="select Nom from enseignant";
					$run_user=mysqli_query($con, $get_user);
					$row=mysqli_fetch_array($run_user);
					$nom=$row['Nom'];
					$sql="SELECT Message FROM message WHERE Ensei='$nom'";
					$result=$con->query($sql);
					if($result ->num_rows>0)
					{
						while($row=$result->fetch_assoc())
						{
							echo "<tr>
							<td>".$row["Message"]."</td>
							</tr>";
						}
						echo "</table>";
					}
					
				?>
		</table>
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
		
	</body>
<html>
