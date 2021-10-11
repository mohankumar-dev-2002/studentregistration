<?php
require_once('connection.php');
$regnum=$_POST['rnum'];
$name=$_POST['sname'];
$title=$_POST['title'];
$about=$_POST['about'];
$guide=$_POST['guide'];
$sw=$_POST['sw'];
$acdyr=$_POST['acdyear'];
$email=$_POST['email'];
$q="INSERT into studentdb values('$regnum','$name','$title','$about','$guide','$sw','$acdyr','$email')";
if(mysqli_query($dbc,$q)){
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
</head><div class=center>Your Records Are Updated Successfully </div>";
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
</head><div class=center>Something Went Wrong...</div>";
}
$to=$email;
$subject='preview of the registration';
$msg='$regnum \r\n $name \r\n $title \r\n $about \r\n $guide \r\n $sw \r\n $acdyr ';
if(mail($to,$subject,$msg)){
	echo "\r\n<html>
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
</head><div class=center> The Preview Mail Is Sented</div>";
}
else{
	echo "\r\n<html>
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
</head><div class=center>Failed To Sent Preview Mail</div>";
}

?>