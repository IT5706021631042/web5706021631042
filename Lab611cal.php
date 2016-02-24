<html>
<head><title>โปรแกรมคำนวณเกรด</title></head>
<body>
  <?php

  $pt = $_GET ['pt'];
  $hw = $_GET ['hw'];
  $ts = $_GET ['ts'];
  $as = $_GET ['as'];
  $mt = $_GET ['mt'];
  $fn = $_GET ['fn'];

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

  echo"<a href='Lab611.html'><big> Back </big></a> ";
  ?>
</body>
</html>
