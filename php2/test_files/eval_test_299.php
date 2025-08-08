<?php
// Eval injection test variation #299
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>