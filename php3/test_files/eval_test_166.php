<?php
// Eval injection test variation #166
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>