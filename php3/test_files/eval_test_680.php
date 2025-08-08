<?php
// Eval injection test variation #680
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>