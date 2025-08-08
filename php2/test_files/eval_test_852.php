<?php
// Eval injection test variation #852
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>