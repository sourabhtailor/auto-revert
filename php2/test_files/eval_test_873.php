<?php
// Eval injection test variation #873
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>