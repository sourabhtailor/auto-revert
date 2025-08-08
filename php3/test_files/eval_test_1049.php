<?php
// Eval injection test variation #1049
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>