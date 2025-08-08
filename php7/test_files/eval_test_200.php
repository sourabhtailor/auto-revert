<?php
// Eval injection test variation #200
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>