<?php
// Eval injection test variation #1101
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>