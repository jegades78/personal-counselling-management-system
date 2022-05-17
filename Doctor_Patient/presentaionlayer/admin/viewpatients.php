<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>

	<style type="text/css">
		body,html{
	margin: 0;
	padding: 0;

}
header{
	width: 100%;
	height: 70px;
	background-color: #282828;

}
h1{
	position: absolute;
	padding: 3px;
	float: left;
	margin-left: 2%;
	margin-top: 10px;
	font-family: 'Alfa Slab One',cursive;
	color:#FF0064;
}

span{
	color: #ffffff;

}
ul{
	width: auto;
	float: right;
	margin-top: 8px;

}

li{
	display: inline-block;
	padding: 15px 15px;

}
a{
	text-align: center;
	color: #ffffff;
	text-decoration: none;
	font-family: 'Open Sans',sans-serif;
	font-size: 1.2vw;

}
a:hover{
	color: #F0c330;
	transition: 0.5s;
}

*{
	margin: 0px;
	padding: 0px;


}
body{
	font-size: 120%;
	background: #FFFBED;


}

.table4{
	border-collapse: collapse;
	width: 100%;
	color: #282828;
	font-family: monospace;
	font-size: 20px;
	text-align: center;
	margin-top:150px;
	padding: 0;
}


th{
	background-color: #5D00FF;
	color: white;
	width: auto;
}
tr:nth-child(even){
	background-color: #f2f2f2;
	width: auto;
}

	</style>

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1><span>Admin Page</span></h1>
		<nav>
		


		
		<ul> 
			
		
		
			<li><a href="index3.php">Add/Delete Doctor</a></li>
			<li><a href="viewdoctor.php">View Doctors</a></li>
			<li><a href=" viewpatients.php">View Patients</a></li>
			<li><a href="viewappointments.php">View Appointments</a></li>
			<li><a href="feedback.php">FeedBack</a></li>


			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>

			


	
			

		</ul>
		



	</nav>




</header>

<body>
	<h1 style="margin-left:35% ;margin-top:80px"   class="asd">Patients Information</h1>
	<table class="table4">
		<tr>
		<th>Patient ID</th>
		<th>Patient Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Email</th>
		<th>Blood Group</th>

		</tr>

		<?php $sql3="SELECT  * FROM  patients " ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["UserID"]."</td><td>".$row3["Name"]."</td><td>".$row3["Address"]."</td><td>".$row3["ContactNumber"]."</td><td>".$row3['Email']."</td><td>".$row3['Bloodtype']."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>
</body>
</html>