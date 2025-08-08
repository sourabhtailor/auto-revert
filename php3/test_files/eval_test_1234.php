<?php
// Eval injection test variation #1234
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>