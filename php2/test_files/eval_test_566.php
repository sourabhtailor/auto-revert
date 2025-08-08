<?php
// Eval injection test variation #566
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>