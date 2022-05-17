<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
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
	color: #39ca74;
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


.Pcontent{

	font-weight: 35px;
	font-size: 35px;
}


*{
	margin: 0px;
	padding: 0px;


}
body{
	font-size: 120%;
	background: #F8F8FF;

}

.header{
	width: 30%;
	margin: 50px auto 0px;
	color: white;
	background: #3644EF;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px ;
	padding: 20px;
}

.headerP{
	width: 20%;
	margin-left: 0px;
	margin-top: 60px;
	color: white;
	background: #39ca74;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px ;
	padding: 20px;
}






form{

	width: 30%;
	margin:0px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	background: white;
	border-radius: 0px 0px 10px 10px;

}




.input-group{
	margin: 10px 0px 10px 0px;
}

.input-group label{
	display: block;
	text-align: left;
	margin: 5px;

}

.input-group input{
	height: 20px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:1px solid grey;

}

.xd{
  height: 30px;
	width: 98%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:1px solid grey;}

	.btn{
	margin :0 50% 0 40%;
	padding: 10px 30px 10px 30px;
	font-size: 15px;
	color: white;
	background: #3644EF;
	border:none;
	border-radius: 5px;
}

.input-group2{
  height: 30px;
	width: 98%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:1px solid grey;}

	.input-group2{
	margin: 10px 0px 10px 0px;
}

.input-group2 label{
	display: block;
	text-align: left;
	margin: 5px;

}

.input-group2 input{
	height: 20px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:1px solid grey;

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


.table2{

	border-collapse: collapse;
	width: 100%;
	color: #282828;
	font-family: monospace;
	font-size: 25px;
	text-align: center;
	margin-top: 130px;




}



th{
	background-color: #39ca74;
	color: white;
}
tr:nth-child(even){
	background-color: #f2f2f2;
}
.my{

	
	color: #39ca74;
	
	
	
	
}


.my{
	
	float: left;
	width: 25%;
	margin-left: 34%;
	background: #282828;
	text-align: center;
	border: 2px solid #282828;
     border-bottom: none;
	border-radius: 10px 10px 0px 0px ;
	padding: 20px;
	margin-top: 30px;
	font-family: 'Times New Roman',cursive;
	color: #39ca74;
}

.mys{
	color: #ffffff;

}


.thanks{
color: #015A40;
font-size: 45px;

}

	</style>

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1><span>Patient Page</span></h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href=" index.php">MyInfo</a></li>
			<li><a href=" book.php">Book Appointment</a></li>
			<li><a href=" view.php">View Appointment</a></li>
			<li><a href=" cancel.php">Cancel Booking</a></li>
			<li><a href="searchdoctor.php ">Search Doctor</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
			



	
			

		</ul>
		



	</nav>




</header>

<body>


	
<form method="post" action="cancel.php">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label>Appointment ID</label>
		<input type="text" name="AppoID2" >

	</div>

	<div class="input-group">
		<button type="submit" name="cancel" class="btn">Cancel</button>
	</div>

	







		</form>
	</form>


</body>
</html>


