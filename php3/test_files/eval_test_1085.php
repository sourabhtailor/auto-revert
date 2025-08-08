<?php
// Eval injection test variation #1085
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>