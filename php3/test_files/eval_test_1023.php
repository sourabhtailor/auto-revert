<?php
// Eval injection test variation #1023
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>