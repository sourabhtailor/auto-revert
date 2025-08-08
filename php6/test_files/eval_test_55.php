<?php
// Eval injection test variation #55
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>