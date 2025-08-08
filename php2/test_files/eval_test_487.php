<?php
// Eval injection test variation #487
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>