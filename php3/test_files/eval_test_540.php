<?php
// Eval injection test variation #540
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>