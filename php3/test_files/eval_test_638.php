<?php
// Eval injection test variation #638
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>