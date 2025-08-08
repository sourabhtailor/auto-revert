<?php
// Eval injection test variation #237
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>