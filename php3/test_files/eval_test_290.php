<?php
// Eval injection test variation #290
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>