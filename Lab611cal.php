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
  echo "<b>Users input data</b></br>";
  echo "Student Name : <b>$name</b></br>";
  echo "Student Score : <b>$score</b></br>";
  if ($score >= 80)
  echo "Student Grade : <b>A </b><br/>";
  elseif ($score >= 75)
  echo "Student Grade : <b>B+ </b><br/>";
  elseif ($score >= 70)
  echo "Student Grade : <b>B </b><br/>";
  elseif ($score >= 65)
  echo "Student Grade : <b>C+ </b><br/>";
  elseif ($score >= 60)
  echo "Student Grade : <b>C </b><br/>";
  elseif ($score >= 55)
  echo "Student Grade : <b>D+ </b><br/>";
  elseif ($score >= 50)
  echo "Student Grade : <b>D </b><br/>";
  else
  echo "Student Grade : <b>F </b><br/>";


  ?>
</body>
</html>
