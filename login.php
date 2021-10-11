<?php
require_once('connection.php');
//only show the actual error not the warnings
error_reporting(E_ALL ^ E_NOTICE);
$name=$_POST['name'];
$pwd=($_POST['pwd']);
$a="SELECT * FROM project WHERE uid='$name' AND upwd='$pwd'";
$r=mysqli_query($dbc,$a);
	if(mysqli_num_rows($r)===1){
		$row=mysqli_fetch_assoc($r);
		if($row['uid']===$name && $row['upwd']===$pwd){
			echo "LogIn Successfull";
			header("location: registration.html",true,301);
			}
		else{
			echo "<html>
<head>
    <link rel=stylesheet href=https://fonts.googleapis.com/css?family=Trirong>
<style>
body {
    background-image:url(image01.jpg) ;
    background-repeat: no-repeat;
    font-family: Trirong, serif;
    background-size: cover;
  
}

.center {
  margin: auto;
  width: 50%;
  border: 3px solid #e6ccff;
  padding: 20px;
  font-size: 180%;
}

</style>
</head><div class=center>Failed To LogIn</div>";
			}
    }
    else{
    	echo "<html>
<head>
    <link rel=stylesheet href=https://fonts.googleapis.com/css?family=Trirong>
<style>
body {
    background-image:url(image01.jpg) ;
    background-repeat: no-repeat;
    font-family: Trirong, serif;
    background-size: cover;
  
}

.center {
  margin: auto;
  width: 50%;
  border: 3px solid #e6ccff;
  padding: 20px;
  font-size: 180%;
}

</style>
</head><div class=center>Unable to login</div>";
    }

?>
