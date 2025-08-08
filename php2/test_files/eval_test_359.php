<?php
// Eval injection test variation #359
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>