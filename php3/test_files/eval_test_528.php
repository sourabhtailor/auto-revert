<?php
// Eval injection test variation #528
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>