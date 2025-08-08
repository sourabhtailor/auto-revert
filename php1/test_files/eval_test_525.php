<?php
// Eval injection test variation #525
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>