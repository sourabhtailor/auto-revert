<?php
// Eval injection test variation #864
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>