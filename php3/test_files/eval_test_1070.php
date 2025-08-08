<?php
// Eval injection test variation #1070
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>