<?php
// Eval injection test variation #456
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>