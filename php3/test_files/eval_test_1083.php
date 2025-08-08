<?php
// Eval injection test variation #1083
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>