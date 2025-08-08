<?php
// Eval injection test variation #1407
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>