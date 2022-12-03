<html>
	<head>
		<title>Etudiant Interface</title>
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
            <li><a href="Absence.php">Enseignant Absent</a></li>
			<li><a href='logoutst.php' title='Deconnexion'>Deconnexion</a></li>
          </ul>
        </div>
      </nav>
	  <table>
			<tr>
				<th>Id</th>
				<th>Enseignant</th>
				<th>Semistre</th>
				<th>Seance</th>
				<th>Date Initiale</th>
				<th>Date Rattrapage</th>
				<th>Salle</th>
				<th>Filliere</th>
				<th>Cause d'absence</th>
				
				<?php
					session_start();
					include("includ/connection.php");
					$sql="SELECT * FROM rattrapage WHERE confirmation='confirmer'";
					$result=$con->query($sql);
					if($result ->num_rows>0)
					{
						while($row=$result->fetch_assoc())
						{
							echo "<tr>
							<td>".$row["Id"]."</td>
							<td>".$row["Enseignant"]."</td>
							<td>".$row["Semistre"]."</td>
							<td>".$row["Seance"]."</td>
							<td>".$row["DateIn"]."</td>
							<td>".$row["DateRa"]."</td>
							<td>".$row["Salle"]."</td>
							<td>".$row["Filliere"]."</td>
							<td>".$row["CauseAb"]."</td></tr>";
						}
						echo "</table>";
					}
					else
					{
						echo"0 result";
					}
					$currentDate = date('Y-m-d');
					$sql2="DELETE FROM rattrapage WHERE DateRa<'$currentDate'";
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
