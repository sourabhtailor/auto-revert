<?php
// Eval injection test variation #1130
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>