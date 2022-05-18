<title>Looping | Serly A</title>
<p>Age </p>
<?php
$jsonobj = '{"Younian":22,"Kai":15,"Xinxin":21}';

$obj = json_decode($jsonobj);

foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>