<?php
// Eval injection test variation #778
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>