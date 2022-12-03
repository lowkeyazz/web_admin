<html>
	<head>
		<title>Departement Interface</title>
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
			<li><a href="logoutdep.php" title="Deconnexion">Deconnexion</a></li>
            <li><a href="Message.php">Send Message</a></li>
            <li><a href="chef_absence.php">Enseignant(e) Absent(e)</a></li>
          </ul>
        </div>
      </nav>
	  <table>
			<tr>
				<th>Id</th>
				<th>Filliere</th>
				<th>Semistre</th>
				<th>Seance</th>
				<th>Date Initiale</th>
				<th>Date Rattrapage</th>
				<th>Salle</th>
				<th>Enseignant</th>
				<th>Cause d'absence</th>
				<th>Etat</th>
				<th>Confirmation</th>
			</tr>
				<?php
					session_start();
					include("includ/connection.php");
					$sql="SELECT * FROM rattrapage where confirmation='Non confirmer'";
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
							<td>".$row["CauseAb"]."</td>
							<td>".$row['confirmation']."</td>
							<td><form action='' method='post'><button name='send'>".'A'."</button><button name='Resfuser'>".'R'."</button></form></td></tr>";
							if(isset($_POST["send"]))
							{
								$sql1="UPDATE rattrapage SET confirmation='confirmer'";
								$result1=$con->query($sql1);
							}else if (isset($_POST["Resfuser"])){
								$sql2="DELETE FROM rattrapage WHERE Id='".$row['Id']."'";
								$result2=$con->query($sql2);}
						}
							
							
					}
						echo "</table>";
					
					$currentDate = date('Y-m-d');
					$sql2="DELETE FROM rattrapage WHERE DateRa<'$currentDate'";
					$result=$con->query($sql2);
					$con->close();
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
