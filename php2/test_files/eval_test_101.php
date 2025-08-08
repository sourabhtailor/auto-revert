<?php
// Eval injection test variation #101
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>