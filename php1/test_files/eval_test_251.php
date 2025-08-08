<?php
// Eval injection test variation #251
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>