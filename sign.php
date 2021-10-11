<?php 

require_once('connection.php');
$name=$_POST['name'];
$roll=$_POST['regsnum'];
$pwd=$_POST['pwd'];
$email=$_POST['email'];
$q="insert into project values('$name','$roll','$pwd','$email')";
$r=mysqli_query($dbc,$q);
$p=mysqli_query($dbc,"select * from project");
while($row=mysqli_fetch_assoc($p)){
	if ($roll==$row['unum'])
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
</head>                  
<div class=center>Thank You For Your Registartion.&nbsp.$row[uid];
<a href=login.html>Login</a>
</div>
</html> ";
}
?>
