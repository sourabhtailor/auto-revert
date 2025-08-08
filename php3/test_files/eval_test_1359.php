<?php
// Eval injection test variation #1359
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>