<?php
// Eval injection test variation #710
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>