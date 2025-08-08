<?php
// Eval injection test variation #330
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>