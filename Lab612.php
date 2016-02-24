<!doctype html>
<html lang="en">
 <head>
   <title>การสร้างฟอร์มในการรับค่าเพื่อการตาราง</title>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
  <form method="post" action="lab612.php">
<table align="center" border="1" width="400" bgcolor="#E6E6FA">
  <tr>
    <td colspan="2" align="center"><big>ทดสอบการใช้ Control Structure<big></td>
    <tr>
      <tr>
        <td align="right">Enter Row : </td>
        <td><input type="text" name="row" size="15" value=""/></td>
      </tr>
        <td align="right">Enter Column : </td>
        <td><input type="text" name="col" size="15" value=""/></td>
      </tr>
      <tr>
        <td width="300" height="25" align="center" colspan="2">
          <input type="submit" value="OK"/>
          <input type="reset" value="CLEAR"/>
        </td>
      </tr>
      <br><br><br><br>
    </table>
  </form>
<?php
$row = $_POST['row'];
$col = $_POST['col'];
echo "<table align='center' border='3' width='300'>";
for ($r=1; $r <= $row; $r++){
echo "<tr>";
for ($c=1; $c <= $col; $c++){
if ($r==$c){
echo "<td align='center'>";
echo "$r,$c</td>";
}
else
{
echo "<td align='center'> $r,$c </td>";
}
}
echo "</tr>";
}
echo "</table>";
?>
 </body>
</html>
