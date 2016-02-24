<!doctype html>
<html lang="en">
<head><title>การสร้างฟอร์มในการรับค่าเพื่อคำนวณเกรด</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <head>
  <body>
    <form method="post" action="Lab611samepage.php">
      <table  border="1" align="center" width="400" bgcolor="#DDC488">

        <br><br><br>
        <tr>
          <td colspan="2" align="center">
            <big>ทดสอบการใช้ Arithmatic Operator </big>
          </td>
        </tr>
        <tr>
          <td> Student Name : : </td>
          <td><input type="text" name="name" size="15" value=""/> </td>
        </tr>
            <tr>
              <td> Enter Points : </td>
              <td><input type="text" name="pt" size="15" value=""/> </td>
            </tr>
            <tr>
              <td> Enter Home work : </td>
              <td><input type="text" name="hw" size="15" value=""/> </td>
            </tr>
            <tr>
              <td> Enter Test : </td>
              <td><input type="text" name="ts" size="15" value=""/> </td>
            </tr>
            <tr>
              <td> Enter Assingment : </td>
              <td><input type="text" name="as" size="15" value=""/> </td>
            </tr>
            <tr>
              <td> Enter Midterm : </td>
              <td><input type="text" name="mt" size="15" value=""/> </td>
            </tr>
            <tr>
              <td> Enter Final : </td>
              <td><input type="text" name="fn" size="15" value=""/> </td>
            </tr>
            <tr>
              <td width="300" height="50" colspan="2" align="center">
              <input type="submit" value=" OK "/>
              <input type="reset" value=" Clear "/>
              </td>
              </tr>

              </table>
                  </form>

                  <?php

                  $pt = $_POST ['pt'];
                  $hw = $_POST ['hw'];
                  $ts = $_POST ['ts'];
                  $as = $_POST ['as'];
                  $mt = $_POST ['mt'];
                  $fn = $_POST ['fn'];

                  echo "<p>";
                  echo "<b> Users input data </b></br>";
                  echo "Student Name : <b>$name</b></br>";
                  echo "Points : <b>$pt</b></br>";
                  echo "Home work : <b>$hw</b></br>";
                  echo "Test : <b>$ts</b></br>";
                  echo "Assingment : <b>$as</b></br>";
                  echo "Midterm : <b>$mt</b></br>";
                  echo "Final : <b>$fn</b></br>";
                  $total = $pt+$hw+$ts+$as+$mt+$fn;

                  echo "Total Score  : <b>$total</b></br>";
                  if ($total>= 80)
                  echo "Result Grade : <b>A </b><br/>";
                  elseif ($total >= 75)
                  echo "Result Grade : <b>B+ </b><br/>";
                  elseif ($total >= 70)
                  echo "Result Grade : <b>B </b><br/>";
                  elseif ($total >= 65)
                  echo "Result Grade : <b>C+ </b><br/>";
                  elseif ($total >= 60)
                  echo "Result Grade : <b>C </b><br/>";
                  elseif ($total >= 55)
                  echo "Result Grade : <b>D+ </b><br/>";
                  elseif ($total >= 50)
                  echo "Result Grade : <b>D </b><br/>";
                  else
                  echo "Result Grade : <b>F </b><br/>";
                  echo "<br>";


                  ?>
                </body>
                </html>
