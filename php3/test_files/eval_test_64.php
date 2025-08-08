<?php
// Eval injection test variation #64
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>