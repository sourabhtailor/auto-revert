<?php
// Eval injection test variation #135
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>