<?php
// Eval injection test variation #98
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>