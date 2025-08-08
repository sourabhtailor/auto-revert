<?php
// Eval injection test variation #1098
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>