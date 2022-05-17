<?php include ('../../datalayer/bookserver.php'); ?>
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
	font-family: 'Times New Roman',cursive;
	color: #992828;
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
	background-color: #992828;
	color: white;
	width: auto;
}
tr:nth-child(even){
	background-color: #f2f2f2;
	width: auto;
}




.headerA{
	width: 30%;
	margin:60px 20px 0px 50px;
	color: white;
	background: #5D00FF;
	text-align: center;
	border: 1px solid ;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px ;
	padding: 20px;
}

.error{

	width: 92%;
	margin: 0px auto;
	padding: 10px;
	border:1px solid #a94442;
	color: #a94442;
	background: #f2dede;
	border-radius: 5px;
	text-align: left;
	
}




form{

	width: 30%;
	margin:0px 20px 0px 50px;
	padding: 20px;
	border: 1px solid #5D00FF;
	background: white;
	border-radius: 0px 0px 10px 10px;

}


.input-groupA{
	margin: 10px 0px 10px 0px;
}

.input-groupA label{
	display: block;
	text-align: left;
	margin: 3px;

}

.input-groupA input{
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:2px solid grey;

}

.btnA{

	padding: 10px;
	font-size: 15px;
	color: white;
	background: #5D00FF;
	border:none;
	border-radius: 5px;




}
.xd{
  height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:1px solid grey;}

.delete{

	width: 30%;
	margin:0px 20px 0px 900px;
	padding: 20px;
	border: 1px solid #5D00FF;
	background: white;
	border-radius: 0px 0px 10px 10px;
}

.headerAD{
	width: 30%;
	margin:-630px 20px 0px 900px;
	color: white;
	background: #5D00FF;
	text-align: center;
	border: 1px solid ;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px ;
	padding: 20px;
}

.Information{

margin-left: 34px;
padding: 10px;
font-weight: bold;
font-size: 30px;
}


.table2{

	border-collapse: collapse;
	width: 100%;
	color: #992828;
	font-family: monospace;
	font-size: 25px;
	text-align: center;
	margin-top: 130px;




}

.searchdonor{

	width: 30%;
	margin:0 auto;
	padding: 20px;
	border: 1px solid #5D00FF;
	background: white;
	border-radius: 0px 0px 10px 10px;

}

.btnAx{

	padding: 10px;
	font-size: 15px;
	color: white;
	background: #5D00FF;
	border:none;
	border-radius: 5px;




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

		<div class="headerA">
	<h2>Add Doctor</h2>
</div>

<form method="post" action="index3.php">

	<?php include ('../../datalayer/errors.php'); ?>

	<div class="input-groupA">
		<label>Doctor ID</label>
		<input type="text" name="addID" >

	</div>


	<div class="input-groupA">
		<label>Doctor Name</label>
		<input type="text" name="addname" >


	</div>

	<div class="input-groupA">
		<label>Address</label>
		<input type="text" name="addAddress">

	</div>

	<div class="input-groupA">
		<label>Contact Number</label>
		<input type="text" name="addContactNumber">


	</div>


	<div class="input-groupA">
		<label>Email address</label>
		<input type="text" name="addEmail">

	</div>

	<div class="input-groupA">
		<label>Password</label>
		<input type="text" name="addpassword">

	</div>
<div class="input-groupA">
	<label>Category</label>
	   	<select name="addcategory" class="xd">
	   		<option value="bone" >Rehabilitation Counselling</option>
	   		<option value="Dentistry">Substance Abuse Counselling</option>
	   		<option value="MentalHealth">Mental Health</option>

	   	</select>
	   	</div>

	<div class="input-groupA">
		<button type="submit" name="Add" class="btnA">Add Doctor</button>
	</div>


	




</form>
	<div class="headerAD">
	<h2>Delete Doctor</h2>
</div>

<form method="post" action="index3.php" class="delete">

	<div class="input-groupA">
		<label>Doctor ID</label>
		<input type="text" name="deleteID" >

	</div>

	<div class="input-groupA">
		<button type="submit" name="Delete" class="btnA">Delete</button>
	</div>

</form>





	

</body>
</html>