<html>
<head>
<mete charset="utf-8">
<title>โปรแกรมรับค่าจากแบบฟอร์ม</title></head>

<style type="text/css">
body {
background-image: url(maxresdefault) ;
background-attachment:fixed;
background-repeat: no-repeat; }
</style>


<body>
<?php
$name1 = $_GET['name1'];
$surname = $_GET['surname'];
$nickname = $_GET['nickname'];
$birthday = $_GET['birthday'];
$age = $_GET['age'];
$gender = $_GET['gender'];
$maritalstatus = $_GET['maritalstatus'];
$hobby = $_GET['hobby'];
$email = $_GET['email'];
echo"<p>";
echo"<b> Data input </b><br/>";
echo"Name : <i> $name1 </i><br/>";
echo"Surname : <i> $surname </i><br/>";
echo"NickName : <i> $nickname </i><br/>";
echo"Brithday :<i> $birthday </i></br>";
echo"Age : <i> $age </i><br/>";
echo"Gender : <i> $gender </i><br/>";
echo"Marital Status : <i> $maritalstatus </i><br/>";
echo"Hobby : <i> $hobby </i><br/>";
echo"Mobile : <i> $mobile </i><br/>";
echo"E-mail : <i> $email </i><br/>";
?>
</body>
<html>
