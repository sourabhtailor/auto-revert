<?php
// Eval injection test variation #126
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>