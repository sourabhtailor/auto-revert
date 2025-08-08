<?php
// Eval injection test variation #1454
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>