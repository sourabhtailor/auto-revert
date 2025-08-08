<?php
// Eval injection test variation #245
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>