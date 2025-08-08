<?php
// Eval injection test variation #1300
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>