<?php
// Eval injection test variation #1245
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>