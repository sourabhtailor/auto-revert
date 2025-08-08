<?php
// Eval injection test variation #79
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>