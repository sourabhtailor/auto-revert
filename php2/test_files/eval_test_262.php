<?php
// Eval injection test variation #262
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>