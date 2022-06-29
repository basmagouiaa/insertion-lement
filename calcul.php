<html>
<body>

Votre tableau est : <br> <?php echo  $_POST["l"]; ?><br>

<?php
$t = explode(" ",$_POST["l"]);
sort($t);

$ma = max($t);

echo "Votre tableau est : <br>". $t ."<br>";

echo "Votre tableau trié est : <br>" ;


$clength=count($t);
echo " clength = ".$clength ."<br>";
for($i=0;$i<$clength;$i++)
  {
  echo $t[$i]." ";
  }

echo "<br>";
echo "Min est : ". $t[2] . "<br>";
echo "Max est : ". $ma . "<br>";
?>

</body>
</html>
