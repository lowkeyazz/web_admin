
<html>
	<head>
		<title>Absence des enseignant</title>
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
	<header class="mainstu">
      <nav>
        <div class="pic">
          <img src="image/logo_ests_2018.png" />
        </div>
        <div class="nav-links">
          <ul>
            <li><a href="maybe.php">Home</a></li>
            <li><a href="student.php">Student</a></li>
            <li><a href="etudiant_interface.php">Rattrapage</a></li>
			<li><a href="logoutst.php" title="Deconnexion">Deconnexion</a></li>
          </ul>
        </div>
      </nav>
		<table>
			<tr>
				<th>Id</th>
				<th>Enseignant</th>
				<th>Date et l'heure d'absence</th>
				<th>Filliere</th>
				<th>Semistre</th>
				<th>Matiere</th>
				<?php
					session_start();
					include("includ/connection.php");
					$sql="SELECT * FROM absence";
					$result=$con->query($sql);
					if($result ->num_rows>0)
					{
						while($row=$result->fetch_assoc())
						{
							echo "<tr>
							<td>".$row["Id"]."</td>
							<td>".$row["Enseignant"]."</td>
							<td>".$row["Date_abs"]."</td>
							<td>".$row["Filliere"]."</td>
							<td>".$row["Semistre"]."</td>
							<td>".$row["Matiere"]."</td>";	
						}
						echo "</table>";
					}
					else
					{
						echo"0 result";
					}
					$currentDate = date('Y-m-d');
					$sql2="DELETE FROM absence WHERE Date_abs<'$currentDate'";
					$result=$con->query($sql2);
					$con->close();
				?>
			</tr>
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
