<?php
// Eval injection test variation #308
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>