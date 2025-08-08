<?php
// Eval injection test variation #1288
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>