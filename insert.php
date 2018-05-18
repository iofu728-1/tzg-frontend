<?php

   $name = $_POST['name'];
   $sex = $_POST['sex'];
   $workCompany = $_POST['workCompany'];
   $title = $_POST['title'];
   $startYear = $_POST['startYear'];
   $graYear = $_POST['graYear'];
   $phoneNum = $_POST['phoneNum'];
   $email = $_POST['email'];
   $party = $_POST['party'];
   $hotel = $_POST['hotel'];

   $con = mysqli_connect("localhost","root","root");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysqli_select_db($con,"schoolmates");
mysqli_query($con,"INSERT INTO forms (name,sex,work_company,title,enter_year,gra_year,phone_num,email,party,hotel)
VALUES ('$name','$sex','$workCompany','$title','$startYear','$graYear','$phoneNum','$email','$party','$hotel')");

mysqli_close($con);
?>