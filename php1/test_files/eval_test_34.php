<?php
// Eval injection test variation #34
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>