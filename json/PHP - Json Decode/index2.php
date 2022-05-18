<title>json_decode 2 | Bryan Adi</title>
<p>Age </p>
<?php
$jsonobj = '{"Younian":22,"Kai":15,"Xinxin":21}';

var_dump(json_decode($jsonobj, true));
?>