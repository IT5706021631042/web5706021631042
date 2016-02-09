<html>
<head>
<mete charset="utf-8">
<title>การสร้างฟอร์มในการรับค่า</title></head>

<style type="text/css">
body {
background-image: url(maxresdefault) ;
background-attachment:fixed;
background-repeat: no-repeat; }
}
</style>

<body>
<form method="get" action="lab5-9cal.php">
<table  align="center" width="600" bgcolor="#EEDC82">

<br><br><br>

<tr>
<td width="300" height="60" colspan="2" align="center">
<h2><br>Profile</h2>
</td>
<tr>
<td width="200" height="30" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firstname : </td>
<td><input type="text" name="firstname" size="25" value=""/></td>
</tr>
<tr>
<td width="200" height="30"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lastname : </td>
<td><input type="text" name="lastname" size="25" value=""/></td>
</tr>
<tr>
<td width="200" height="30"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NickName : </td>
<td><input type="text" name="nickname" size="10" value=""/></td>
</tr>

<tr>
  <tr>
          <td width="200" height="30"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Birthdate : </td>
          <td>
            <input type="date" name="bday">
          </td>
        </tr>
          <td width="200" height="30"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age : </td>
          <td>
            <input type="text" name="age" size="3" value=""/>
          </td>
        </tr>
<tr>
<td width="200" height="30"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender : </td>
<td><input type="radio" name="gender" value="male">male<br>
<input type="radio" name="gender" size="40" value="female">female
</tr>

<tr>
<td width="200" height="30"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Relationship Status :</td>
<td>
<form>
<select name="relationshipstatus">
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
<td width="200" height="30"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The most favorite hobby : </td>
<td><input type="radio" name="radio" size="45" value="read a book">read a book<br>
<input type="radio" name="hobby" size="45" value="watch a movie">watch a movie<br>
<input type="radio" name="hobby" size="45" value="play computer">play computer<br>
<input type="radio" name="hobby" size="45" value="play music">play music<br>
<input type="radio" name="hobby" size="45" value="art work">art work<br>
<input type="radio" name="hobby" size="45" value="sport">sport<br>
<input type="radio" name="hobby" size="45" value="travel">travel<br>
</tr>
<td width="200" height="30"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile : </td>
<td><input type="text" name="mobile" size="15" value=""/></td>
</tr>
<td width="200" height="30"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail : </td>
<td><input type="text" name="email" size="30" value=""/></td>
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
