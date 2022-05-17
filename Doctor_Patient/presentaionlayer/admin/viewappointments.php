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
	font-family: 'Times New Roman',cursive;
	color: #B200FF;
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
	border:1px solid #5D00FF;
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
	<h1 style="margin-left:40% ;margin-top:80px"   class="asd"> Appointments </h1>
	<table class="table4">
		<tr>
		<th>Appointments ID</th>
		<th>Doctor ID</th>
		<th>Patient ID</th>
		<th>Date</th>
		<th>Time</th>
		

		</tr>

		<?php $sql3="SELECT  * FROM  bookapp " ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["AppoID"]."</td><td>".$row3["docID"]."</td><td>".$row3["patientID"]."</td><td>".$row3["Date"]."</td><td>".$row3['Time']."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>
	   <h1 style="margin-left:37% ;margin-top:50px"   class="asd">Send Confirmation Email </h1>

    <form role="form" method="post" enctype="multipart/form-data" class="form1" style="width: 100%;margin-top:110px;margin-left: -10px;">

    
    <div classs="xa" style="margin-top:0px">
        <label for="email" style="width:40px;">Email</label>
        <input type="email"  id="email" name="email" maxlength="50" style="width:400px;" placeholder="XAXAXA@gmail.com">
        
        <label for="subject" style="margin:10px ;display: inline-block;">Subject</label>
        <input type="text"  id="subject" name="subject" maxlength="50" style="width:400px;" placeholder="Appointment Confirmation">
        
        <label for="name" style="margin:10px ;display:inline-block;" >Message</label>
        <input type="text" placeholder="this is a Confirmation email for your appointment ID:" type="textarea"  id="message" name="message" rows="1" style="width:400px;padding-top: 10px" maxlength="2000">
               
               
        
        <button type="submit"  id="message" name="sendemail" style="width:200px;height:30px; border: none; border-radius: 10px; background: #5D00FF ;margin-left:45%;color: white ">Send
               </button>
               
        
        </div>
        </form>
    
    
    <?php 
    if (isset($_POST['sendmail'])){
        if(mail($_POST['email'], $_POST['subject'], $_POST['message'],'FROM:jegadesanv2001@gmail.com')){
            echo "success";
        }else{
            echo "failed";
        }
    }
    
    ?>
</body>
</html>