<?php
// Eval injection test variation #10
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>