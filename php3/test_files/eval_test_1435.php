<?php
// Eval injection test variation #1435
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>