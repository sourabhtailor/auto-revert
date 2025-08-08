<?php
// Eval injection test variation #493
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>