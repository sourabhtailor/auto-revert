<?php
// Eval injection test variation #481
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>