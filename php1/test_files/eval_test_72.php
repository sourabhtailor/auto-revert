<?php
// Eval injection test variation #72
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>