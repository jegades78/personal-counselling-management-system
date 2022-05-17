<!DOCTYPE html>
<html>
<head>
	<title>Doctor Patient</title>
	<style type="text/css">
		html,body{
	margin-top: 0;
	padding: 0;
	width: 100%;
}
body{
	height: 100vh;
	background: linear-gradient(45deg,#FEFBEB,#FFDBD8,#FFBDFD);

}

.buttonA{
	position: absolute;
	top: 65%;
	left: 50%;
	transform: translate(-50%,-50%);
	
}
.buttonA{
	background: #00857B;
	color: #FFFFFF;
	width: 240px;
	height: 80px;
	border:1px;
	font-size: 25px;
	border-radius: 20px;
	transition: .6s;
	overflow: hidden;

}
.buttonA:focus{
	outline: none;
}

.buttonA:before{
    content: '';
    display: block;
    position: absolute;
    background: #992828;
    width: 60px;
    height: 100%;
    left: 0;
    top: 0;
    opacity: .5;
    filter: blur(30px);
    transform: translateX(-130px) skewX(-15deg);
}

.buttonA:after{
    content: '';
    display: block;
    position: absolute;
    background: #992828;
    width: 30px;
    height: 100%;
    left: 30px;
    top: 0;
    opacity: 0;
    filter: blur(30px);
    transform: translateX(-100px) scaleX(-15deg);
}

.buttonA:hover:before {
   transition: 0.3s;
  transition: 0.5s all ease-in-out;
}

.buttonA:hover:after {
    box-shadow: 0 10px 50px rgba(188,197,216,1);
    transform: scale(1.2);

}

.buttonA:hover {
  background: #992828;
  cursor: pointer;
  display: inline-block;
  margin: 1em 0;
  transition: 0.3s;
  transition: 0.5s all ease-in-out;
}


.buttonP{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.buttonP{
	background: #00857B;
	color: #FFFFFF;
	width: 240px;
	height: 80px;
	border:1px;
	font-size: 25px;
	border-radius: 20px;
	transition: .6s;
	overflow: hidden;

}
.buttonP:focus{
	outline: none;
}

.buttonP:before{
    content: '';
    display: block;
    position: absolute;
    background: #39ca74;
    width: 60px;
    height: 100%;
    left: 0;
    top: 0;
    opacity: .5;
    filter: blur(30px);
    transform: translateX(-130px) skewX(-15deg);
}

.buttonP:after{
    content: '';
    display: block;
    position: absolute;
    background: #39ca74;
    width: 30px;
    height: 100%;
    left: 30px;
    top: 0;
    opacity: 0;
    filter: blur(30px);
    transform: translateX(-100px) scaleX(-15deg);
}

.buttonP:hover:before {
   transition: 0.3s;
   transition: 0.5s all ease-in-out;
}

.buttonP:hover:after {
   transform: translateX(300px) skewX(-15deg);
    opacity: 1;
    transition: .7s;
}

.buttonP:hover {
  background: #992828;
  cursor: pointer;
  display: inline-block;
  margin: 1em 0;
  transition: 0.3s;
  transition: 0.5s all ease-in-out;
}

.buttonD{
	position: absolute;
	top: 35%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.buttonD{
	background: #00857B;
	color: #FFFFFF;
	width: 240px;
	height: 80px;
	border:1px;
	font-size: 25px;
	border-radius: 20px;
	transition: .6s;
	overflow: hidden;

}
.buttonD:focus{
	outline: none;
}

.buttonD:before{
    content: '';
    display: block;
    position: absolute;
    background: #423289;
    width: 60px;
    height: 100%;
    left: 0;
    top: 0;
    opacity: .5;
    filter: blur(30px);
    transform: translateX(-130px) skewX(-15deg);
}

.buttonD:after{
    content: '';
    display: block;
    position: absolute;
    background: #423289;
    width: 30px;
    height: 100%;
    left: 30px;
    top: 0;
    opacity: 0;
    filter: blur(30px);
    transform: translateX(-100px) scaleX(-15deg);
}

.buttonD:hover:before {
   transition: 0.3s;
   transition: 0.5s all ease-in-out;
}

.buttonD:hover:after {
    transform: translateX(300px) skewX(-15deg);
    opacity: 1;
    transition: .7s;
}

.buttonD:hover {
  background: #992828;
  cursor: pointer;
  display: inline-block;
  margin: 1em 0;
  transition: 0.3s;
  transition: 0.5s all ease-in-out;
}


	</style>

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="id=edge">
</head>

<body>

    <p style="text-align: center; margin-top: 40px; font-weight: 300; font-size: 2.5em; line-height: 1.8em; color: #98a0ad;">Online Counseling Management System</p>
	<div class="wrapper">
		<div class="btn" > <a href="login3.php">

<button type="button" class="buttonA" > Admin</button>

</div>

</div>


	<div class="wrapper" style="text-decoration: none;">
	<div class="btn" > <a href="login.php"  >
<button type="button" class="buttonP">Patient</button>
</div>

</div>


	<div class="wrapper" style="text-decoration: none;">
	<div class="btn" > <a href="login2.php"  >
<button type="button" class="buttonD">Doctor</button>
        </a>
</div>

</div>

	


 
	




</body>
</html>