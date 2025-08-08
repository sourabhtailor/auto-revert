<?php
// Eval injection test variation #8
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>