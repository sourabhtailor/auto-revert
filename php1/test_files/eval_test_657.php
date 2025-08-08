<?php
// Eval injection test variation #657
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>