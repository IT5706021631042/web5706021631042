<html>
<head>
<mete charset="utf-8">
<title>การสร้างฟอร์มในการรับค่า</title>	</head>

<style type="text/css">
body {
background-image: url(maxresdefault) ;
background-attachment:fixed;
background-repeat: no-repeat; }
}
</style>

<body>
<form method="get" action="lab5-9cal.php">
<table border="1" bordercolor="#FFA07A" align="center" width="600" bgcolor="#F5DEB3">
<tr>
<td width="300" height="60" colspan="2" align="center">
<big>Profile</big>
</td>
<tr>

<td width="200" height="30" > Name : </td>
<td><input type="text" name="name1" size="20" value=""/></td>
</tr>
<tr>
<td width="200" height="30">Surname : </td>
<td><input type="text" name="surname" size="20" value=""/></td>
</tr>
<tr>
<td width="200" height="30">NickName : </td>
<td><input type="text" name="nickname" size="10" value=""/></td>
</tr>

<tr>
<td width="200" height="30">Birthday : </td>
<td>

  <select name='sD1' id='sD1'>
  <?
  for($i=1;$i<=31;$i++){
  	$i2=sprintf("%02d",$i);
  	echo '<option value="'.$i2.'">'.$i2.'</option>';
   }?>
  </select>


<select name='sM1' id='sM1'>
<?
for($i=1;$i<=12;$i++){
	$i2=sprintf("%02d",$i);
	echo '<option value="'.$i2.'">'.$i2.'</option>';
 }?>
</select>


<select name='sY1' id='sY1'>
<?
$xYear=date('Y');
        echo '<option value="'.$xYear.'">'.$xYear.'</option>';
	for($i=1;$i<=100;$i++){
		echo '<option value="'.($xYear-$i).'">'.($xYear-$i).'</option>';
 	}
?>
</select>

</td>
</tr>

<td>Age : </td>
<td><input type="text" name="age" size="10" value=""/></td>
</tr>
<tr>
<td>Gender : </td>
<td><input type="radio" name="gender" value="male">male<br>
<input type="radio" name="gender" size="40" value="female">female
</tr>

<tr>
<td width="200" height="30">Marital Status :</td>
<td>
<form>
<select name="maritalstatus">
  <option value=""> <-- please select status--> </option>
  <option value="single"> single </option>
  <option value="married"> married </option>
  <option value="widowed"> widowed </option>
  <option value="divorced"> divorced </option>
</select>
</form>
</td>
</tr>

</tr>
<td width="200" height="30">Hobby : </td>
<td><input type="checkbox" name="hobby" size="45" value="read a book">read a book<br>
<input type="checkbox" name="hobby" size="45" value="watch TV">watch TV<br>
<input type="checkbox" name="hobby" size="45" value="play computer">play computer<br>
<input type="checkbox" name="hobby" size="45" value="play music">play music<br>
<input type="checkbox" name="hobby" size="45" value="sport">sport<br>
<input type="checkbox" name="hobby" size="45" value="travel">travel<br>
</tr>
<td width="200" height="30">Mobile : </td>
<td><input type="text" name="mobile" size="10" value=""/></td>
</tr>
<td width="200" height="30">E-mail : </td>
<td><input type="text" name="email" size="23" value=""/></td>
</tr>
<tr>
<td width="300" height="50" colspan="2" align="center">
<input type="submit" value=" OK "/>
<input type="reset" value=" Clear "/>
</td>
</tr>
</table>
</form>
</body>
</html>
