<?php
// Eval injection test variation #4
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>