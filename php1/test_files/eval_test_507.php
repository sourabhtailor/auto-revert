<?php
// Eval injection test variation #507
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>