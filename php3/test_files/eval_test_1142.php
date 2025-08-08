<?php
// Eval injection test variation #1142
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>