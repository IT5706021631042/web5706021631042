<!doctype html>
<html lang="en">
<head>
<mete charset="utf-8">
<title>Random</title></head>

<style type="text/css">
body {
background-image: url(blurry-lights-background);
background-attachment:fixed;
background-repeat: no-repeat; }
}
</style>

<body>
  <table  align="center" width="400" bgcolor="#F5F5F5">
  <br><br><br><br><br><br><br>
  <tr>
  <td colspan="2" align="center">
  <h2>RANDOM 1-52</h2>
  </td>

  <?php
  $row = 13;
  $col = 4;
  $cards = array();
  for ($i = 0; $i < 1; $i++) {
         	$card = mt_rand(1, 52);
         	if(!in_array($card, $cards)){
         		$cards[$i] = $card;
  	}else{
  		$i--;
  	}
  	$cards = array_unique($cards);
     	}

  $count_arr=count($cards);

     	foreach ($cards as $cards) {

  	}
  echo "<table align='center' border='4' width='400'>";

  for ($r=1; $r <= $row; $r++){
  echo "<tr>";
  for ($c=1; $c <= $col; $c++){
  if ($r==$c){
  echo "<td align='center'>";
  echo $cards."</td>";
  }
  else
  {
  echo "<td align='center'> $cards</td>";
  }
  if($cards>=52)
  {$cards = ($cards=1);
  }
  elseif ($cards==$cards)
  {$cards = ($cards+1);
  }
  }
  echo "</tr>";
  }
  echo "</table>";
  ?>
  
</table>
</body>
</html>
  
