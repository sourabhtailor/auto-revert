<?php
// Eval injection test variation #470
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>