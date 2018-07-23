<html>
<head></head>

<?php
$color=substr(md5(time()),0,6);
echo '<body style="background:#'.$color.'":>hello world';

echo uniqid();

?>
</body>
</html>