<?php
// Eval injection test variation #1035
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>