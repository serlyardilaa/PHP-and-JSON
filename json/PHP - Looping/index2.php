<title>Looping | Serly A</title>
<p>Age </p>
<?php
$jsonobj = '{"Younian":22,"Kai":15,"Xinxin":21}';

$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>