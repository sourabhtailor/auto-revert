<?php
// Eval injection test variation #401
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>