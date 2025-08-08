<?php
// Eval injection test variation #86
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>