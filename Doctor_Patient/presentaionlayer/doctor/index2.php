<?php include ('../../datalayer/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
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
	color: #423289;
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


.Dcontent{

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






*{
	margin: 0px;
	padding: 0px;


}
.Dbody{
	font-size: 120%;
	background: #423289;

}

.Dheader{
	width: 30%;
	margin: 50px auto 0px;
	color: white;
	background: #423289;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px ;
	padding: 20px;
}




.Dform{

	width: 30%;
	margin:0px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	background: white;
	border-radius: 0px 0px 10px 10px;

}


.input-groupD{
	margin: 10px 0px 10px 0px;
}

.input-groupD label{
	display: block;
	text-align: left;
	margin: 3px;

}

.input-groupD input{
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:1px solid grey;

}

.btnD{

	padding: 10px;
	font-size: 15px;
	color: white;
	background: #423289;
	border:none;
	border-radius: 5px;




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


.header{
	width:15%;
	margin: 50px 0px 0px;
	color: white;
	background: #423289;
	text-align: center;
	border: 3px solid #423289;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px ;
	padding: 20px;
}




.info{

	width: auto;
	margin-left: 0px;
	padding: 20px;
	border: 1px solid #EBEBEB ;
	background: #EBEBEB;
	border-radius: 0px 0px 10px 10px;

}




.table2{

	border-collapse: collapse;
	width: 100%;
	color: #282828;
	font-family: monospace;
	font-size: 20px;
	text-align: center;
	margin-top: 130px;




}



th{
	background-color: #423289;
	color: white;
	width: auto;
}
tr:nth-child(even){
	background-color: #f2f2f2;
	width: auto;
}
.my1{

	
	color: #423289;
	
	
	
	
}


.my1{
	
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
	color: #423289;
}

.mys{
	color: #ffffff;

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

.patientsearch{

	width: 30%;
	margin:0px auto;
	padding: 20px;
	border: 1px solid #423289;
	background: white;
	border-radius: 0px 0px 10px 10px;

}

	.btn{
	margin :0 50% 0 40%;
	padding: 10px 30px 10px 30px;
	font-size: 15px;
	color: white;
	background: #423289;
	border:none;
	border-radius: 5px;
}
.add{


	width: 30%;
	margin:0px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	background: white;
	border-radius: 0px 0px 10px 10px;


}


.input-group-add input{


	height: 55px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border:1px solid grey;



}

.input-group-add{
	margin: 10px 0px 10px 0px;
}

.input-group-add label{
	display: block;
	text-align: left;
	margin: 5px;

}

.thanks{
color: #423289;
font-size: 40px;

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

.table3{
	border-collapse: collapse;
	width: 100%;
	color: #282828;
	font-family: monospace;
	font-size: 20px;
	text-align: center;
	margin-top: 10px;
	padding: 0;
}
	</style>
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1 ><span>Doctor Page</span></h1>
		<nav>
		


		
		<ul > 
			
		
			<li><a href="index2.php">MyInfo</a></li>
			<li><a href="doctorapp.php">My Appointments</a></li>
			<li><a href=" searchpatient.php">Search Patient</a></li>
			<li><a href="add.php">Add Description</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
			
			



	
			

		</ul>
		



	</nav>




</header>
<body >

	<div class="header">
	<h2>My Information</h2>
</div>
<form method="post" action="index2.php" class="info">


 


<div class="Dcontent">


	<label>ID: <?php echo "" .isset($_SESSION['DoctorID']);?></label>

	 	   <br>
	 	   <br>
	 	   <label> Email : <?php echo $colD['email']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Name : <?php echo $colD['Doctorname']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Address : <?php echo $colD['Address']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Contact Number : <?php echo $colD['ContactNumber']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Specialized In : <?php echo $colD['categorey']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	            
	
</div>


</form>


</body>
</html>