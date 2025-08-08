<?php
// Eval injection test variation #3
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>