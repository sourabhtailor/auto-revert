<?php
// Eval injection test variation #971
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>