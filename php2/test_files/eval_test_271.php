<?php
// Eval injection test variation #271
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>