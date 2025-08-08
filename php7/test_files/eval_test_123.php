<?php
// Eval injection test variation #123
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>