<?php
// Eval injection test variation #848
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>