<?php
$psswd = substr( md5(microtime()), 1, 5);
echo $psswd;
?>