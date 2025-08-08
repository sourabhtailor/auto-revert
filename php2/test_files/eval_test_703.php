<?php
// Eval injection test variation #703
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>