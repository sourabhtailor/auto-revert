<?php
// Eval injection test variation #20
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>