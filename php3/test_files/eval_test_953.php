<?php
// Eval injection test variation #953
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>