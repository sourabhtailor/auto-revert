<?php
// Eval injection test variation #157
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>