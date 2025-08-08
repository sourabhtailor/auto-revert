<?php
// Eval injection test variation #1134
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>