<?php
// Eval injection test variation #368
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>