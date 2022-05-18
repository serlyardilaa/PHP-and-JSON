<title>Decoded Values</title>
<p>Age </p>
<?php
$jsonobj = '{"Younian":22,"Kai":15,"Xinxin":21}';

$obj = json_decode($jsonobj);

echo $obj->Younian;
echo $obj->Kai;
echo $obj->Xinxin;
?>