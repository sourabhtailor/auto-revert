<?php
// Eval injection test variation #254
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>