<title>Decoded Values 2</title>
<p>Age </p>
<?php
$jsonobj = '{Younian":22,"Kai":15,"Xinxin":21}';

$arr = json_decode($jsonobj, true);

echo $arr["Younian"];
echo $arr["Kai"];
echo $arr["Xinxin"];
?>