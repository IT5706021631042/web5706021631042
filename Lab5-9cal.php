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
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$nickname = $_GET['nickname'];
$bday = $_GET['bday'];
$age = $_GET['age'];
$gender = $_GET['gender'];
$relationshipstatus = $_GET['relationshipstatus'];
$hobby = $_GET['hobby'];
$email = $_GET['email'];

echo"<p><br/><br/>";

echo"<b> DATA INPUT </b><br/>";
echo"<b>************************* </b><br/>";
echo"FirstName : <i> $firstname </i><br/>";
echo"Lastname : <i> $lastname </i><br/>";
echo"NickName : <i> $nickname </i><br/>";
echo "Date : <i> $bday </i> <br/>";

    if($age <= 100 && $age >= 1)
      echo "Age : <i> $age </i><br/>";
    else
      echo "Unsuccessful <br/>";
echo"Gender : <i> $gender </i><br/>";
echo"Relationship Status : <i> $relationshipstatus </i><br/>";
echo"Hobby : <i> $hobby </i><br/>";
if(strlen($mobile) == 10)
      echo "Mobile : <i> $mobile </i><br/>";
    else
      echo "Phone : Unsuccessful <br/>";
echo"E-mail : <i> $email </i><br/>";
?>
</body>
<html>
