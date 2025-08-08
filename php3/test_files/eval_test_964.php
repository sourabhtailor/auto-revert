<?php
// Eval injection test variation #964
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>