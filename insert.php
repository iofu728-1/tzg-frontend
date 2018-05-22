<?php
  header("Content-Type: text/html;charset=utf-8"); 
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

  $con = mysqli_connect('localhost','root','swkl0817zz');
  
  if(!$con){
  die('Could not connect:'.mysql_error());
  }
  
  mysqli_set_charset($con, "utf8");
  mysqli_select_db($con,'xydj');
  mysqli_query($con,"INSERT INTO info (name, sex, work_company, title, enter_year, gra_year, phone_num, email,party,hotel) VALUES ('$name','$sex','$workCompany','$title','$startYear','$graYear','$phoneNum','$email','$party','$hotel')");
  mysqli_close($con);

?>