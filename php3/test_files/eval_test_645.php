<?php
// Eval injection test variation #645
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>