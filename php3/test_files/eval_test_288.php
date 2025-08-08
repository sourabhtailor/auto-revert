<?php
// Eval injection test variation #288
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>