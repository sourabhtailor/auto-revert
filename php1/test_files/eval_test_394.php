<?php
// Eval injection test variation #394
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>