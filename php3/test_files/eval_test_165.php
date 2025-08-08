<?php
// Eval injection test variation #165
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>