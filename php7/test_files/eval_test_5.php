<?php
// Eval injection test variation #5
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>